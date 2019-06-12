<?php
include_once 'includes/default-section.php';
include_once 'includes/components.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include 'includes/head.php';
    head('MS Paint IDE - Partners');
    ?>
</head>
<body id="page-top">
<?php include 'includes/navbar.php' ?>

<div class="content">
    <div class="container col-xl-9 first-container">
        <?php startSection('Press', 'press', 'large-section'); ?>
        <p>MS Paint IDE has been featured in several news sites, the most notable being below. If you have any questions
            regarding posting about the IDE, please contact press@ms-paint-i.de</p>
        <div class="even-card-container press-card-container">
            <?php
            createPressCards([
                ['Reddit', '9/11/18', '/press/logos/reddit.png', 'https://www.reddit.com/r/programming/comments/9euqsv/ms_paint_ide/'],
                ['Hacker news', '9/11/18', '/press/logos/hackernews.png', 'https://news.ycombinator.com/item?id=17958021'],
                ['Hackaday', '9/13/18', '/press/logos/hackaday.png', 'https://hackaday.com/2018/09/13/a-whole-other-kind-of-graphical-programming/'],
                ['Tproger', '9/18/18', '/press/logos/tproger.png', 'https://tproger.ru/devnull/ms-paint-ide/'],
                ['Tweakers', '12/9/18', '/press/logos/tweakers.png', 'https://tweakers.net/geek/143297/programmeur-maakt-ide-met-ms-paint.html'],
                ['zhihu', '12/13/18', '/press/logos/zhihu.png', 'https://zhuanlan.zhihu.com/p/46289189']
            ]);
            ?>
        </div>
        <?php endSection(); ?>
    </div>
</div>

<?php include 'includes/footer.php' ?>
</body>
</html>