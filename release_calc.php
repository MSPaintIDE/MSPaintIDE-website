<?php
// This is meant to generate the /generated/releases.json file
// This is NOT included in the webserver, and is ran locally
error_reporting(E_ALL);
ini_set('display_errors', 1);
$ch = curl_init();

$json = json_decode(get('https://api.github.com/repos/MSPaintIDE/MSPaintIDE/releases'), true);
$json = array_reverse($json);

$data = [];
$previous = [
    'tag_name' => null
];

$zip_file_sizes = [];
$zip_file_sizes['v1.0'] = '104 KB';
$zip_file_sizes['v1.1'] = '107 KB';
$zip_file_sizes['v1.2'] = '109 KB';
$zip_file_sizes['v2.0'] = '166 KB';
$zip_file_sizes['v2.0.1'] = '167 KB';
$zip_file_sizes['v2.0.2'] = '168 KB';
$zip_file_sizes['v2.1.0'] = '174 KB';
$zip_file_sizes['v2.1.1'] = '323 KB';

foreach ($json as $release) {
    $description = $release['body'];
    $title = $release['name'];
    $version = $release['tag_name'];
    $commits = 0;
    $additions = 0;
    $deletions = 0;
    $date_diff = '-';
    $downloads = [];

    $prev_version = $previous['tag_name'];
    $curr_version = $release['tag_name'];

    // first.patch refers to the file output of:
    //   git diff 4b825dc642cb6eb9a060e54bf8d69288fbee4904 v1.0
    $compare = json_decode(get($prev_version != null ? "https://api.github.com/repos/MSPaintIDE/MSPaintIDE/compare/$prev_version...$curr_version" : "https://ms-paint-i.de/first.patch"), true);
    $commits = $compare['total_commits'];
    $patch = get($compare['patch_url']);
    preg_match_all('/(\d*) insertions\(\+\), (\d*) deletions/', $patch, $matches);

    $additions = array_sum($matches[1]);;
    $deletions = array_sum($matches[2]);;

    if ($prev_version != null) {
        $start_date = $previous['published_at'];
        $curr_date = $release['published_at'];

        $now = strtotime($curr_date);
        $your_date = strtotime($start_date);
        $date_diff = $now - $your_date;

        $date_diff = round($date_diff / (60 * 60 * 24));
    }

    foreach ($release['assets'] as $asset) {
        array_push($downloads, [
            'title' => 'Title',
            'type' => extension_converter($asset['browser_download_url']),
            'size' => format_bytes(intval($asset['size'])),
            'url' => $asset['browser_download_url']
        ]);
    }

    array_push($downloads, [
        'title' => 'Source',
        'type' => 'ZIP',
        'size' => $zip_file_sizes[$curr_version],
        'url' => $release['zipball_url']
    ]);

    $previous = $release;
    array_push($data, [
        'title' => $title,
        'version' => $version,
        'description' => $description,
        'commits' => $commits,
        'additions' => $additions,
        'deletions' => $deletions,
        'date_diff' => $date_diff,
        'downloads' => $downloads
    ]);
}

echo json_encode($data);

function extension_converter($filename) {
    return strtoupper(pathinfo($filename)['extension']);
}

function format_bytes($bytes, $precision = 2) {
    $units = array('B', 'KB', 'MB', 'GB', 'TB');

    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);

    $bytes /= pow(1024, $pow);

    return round($bytes, $precision) . ' ' . $units[$pow];
}

function get($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, "MS Paint IDE");
    curl_setopt($ch, CURLOPT_URL, $url);
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}
