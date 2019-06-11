<?php

function createInfoCards($dataArray) {
    foreach ($dataArray as $data) {
        $title = $data[0];
        $body = $data[1];
        $url = $data[2];
        ?>
        <div class="info-card">
            <h4><?php echo $title ?></h4>
            <p><?php echo $body ?></p>
            <a class="btn btn-black-outline right-arrow" href="<?php echo $url ?>">Info</a>
        </div>
        <?php
    }
}
