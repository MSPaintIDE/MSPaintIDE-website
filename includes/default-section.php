<?php
$sectionIndex = 0;
function startSection($title) {
    global $sectionIndex;
    $modifier = '';
    if ($sectionIndex++ > 0) $modifier = ' top-section-padding';
    ?>
    <div class="default-section<?php echo $modifier ?>">
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
