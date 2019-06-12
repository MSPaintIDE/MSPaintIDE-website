<?php

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

function createHistorySeparator() {

}