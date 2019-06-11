<?php
$sectionIndex = 0;
function startSection($title, $anchor = null) {
    global $sectionIndex;
    $modifier = '';
    if ($sectionIndex++ > 0) $modifier = ' top-section-padding';
    if ($anchor != null) $anchor = 'id="' . $anchor . '" ';
    ?>
    <div <?php echo $anchor ?>class="default-section<?php echo $modifier ?>">
    <h2><?php echo $title ?></h2>
    <hr>
    <div class="section-content">
    <?php
}

function endSection() {
    ?>
    </div>
    </div>
    <?php
}
