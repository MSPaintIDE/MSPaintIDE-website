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

function createHistoryBoxes($dataArray) {
    foreach ($dataArray as $data) {
        createHistoryBox($data[0], $data[1], $data[2]);
    }
}

function createHistoryBox($title, $date, $text) {
    ?>

    <div class="history-card-wrapper">
        <div class="history-card">
            <span class="history-title"><?php echo $title ?></span>
            <span class="history-date"><?php echo $date ?></span>
            <p class="history-text"><?php echo $text ?></p>
        </div>
    </div>
    <?php
}

function createPressCards($dataArray) {
    foreach ($dataArray as $data) {
        createPressCard($data[0], $data[1], $data[2], $data[3]);
    }
}

function createPressCard($name, $date, $logo, $url) {
    ?>
    <a class="press-card" href="<?php echo $url ?>" target="_blank">
        <div class="press-card-text">
            <span class="press-name"><?php echo $name ?></span>
            <span class="press-date"><?php echo $date ?></span>
        </div>
        <img class="press-logo" src="<?php echo $logo ?>" alt="<?php echo $name ?>'s logo"/>
    </a>
    <?php
}