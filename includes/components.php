<?php

function createInfoCard($title, $body, $url) {
?>
    <div class="info-card">
        <h4><?php echo $title ?></h4>
        <p><?php echo $body ?></p>
        <a class="btn btn-black-outline right-arrow" href="<?php echo $url ?>">Info</a>
    </div>
<?php
}
