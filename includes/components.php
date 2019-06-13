<?php

function endsWith($haystack, $needle) {
    $length = strlen($needle);
    if ($length == 0) return true;
    return substr($haystack, -$length) === $needle;
}

function createInfoCards($dataArray) {
    foreach ($dataArray as $data) {
        $title = $data[0];
        $body = $data[1];
        $url = $data[2];
        ?>
        <div class="info-card">
            <h4><?php echo $title ?></h4>
            <p><?php echo $body ?></p>
            <div class="btn-container">
                <a class="btn btn-black-outline right-arrow" href="<?php echo $url ?>">Info</a>
            </div>
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

function createStatsCard($commits, $projectCount, $stars) {
    ?>
    <div class="stats-card">
        <div class="stats-section">
            <span class="stats-data"><?php echo $commits ?></span>
            <span class="stats-name">Commits</span>
        </div>
        <div class="stats-section">
            <span class="stats-data"><?php echo $projectCount ?></span>
            <span class="stats-name">Projects</span>
        </div>
        <div class="stats-section">
            <span class="stats-data"><?php echo $stars ?></span>
            <span class="stats-name">Stars</span>
        </div>
    </div>
    <?php
}

function createResourceCards($dataArray) {
    foreach ($dataArray as $data) {
        createResourceCard($data);
    }
}

function createResourceCard($data) {
    ?>
    <div class="info-card resource-card">
        <?php
        if (endsWith($data['image'], '.svg')) {
            ?>
            <object class="resource-preview svg-logo-preview" data="<?php echo $data['image'] ?>" type="image/svg+xml"></object>
            <?php
        } else {
            ?>
            <img class="resource-preview" src="<?php echo $data['image'] ?>" alt="<?php echo $data['name'] ?> preview">
            <?php
        }
        ?>
        <h4 class="resource-name"><?php echo $data['name'] ?></h4>
        <div class="btn-container">
            <?php
            foreach ($data['downloads'] as $format => $link) {
                ?>
                <a class="btn btn-black-outline right-arrow png-button" href="<?php echo $link ?>" download><?php echo $format ?></a>
                <?php
            }
            ?>
        </div>
        <?php
        if (isset($data['info'])) {
            ?>
            <div class="resource-info-container">
                <i class="fas fa-info-circle resource-info-button" data-container="body" data-toggle="popover" data-placement="top" data-content="<?php echo $data['info'] ?>"></i>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
}

function createProjectCards($dataArray) {
    foreach ($dataArray as $data) {
        createProjectCard($data[0], $data[1], $data[2], $data[3], $data[4], $data[5]);
    }
}

function createProjectCard($name, $languages, $commits, $stars, $desc, $url) {
    ?>
    <div class="info-card project-card">
        <a class="project-card-link" href="<?php echo $url ?>" target="_blank">
            <div class="left-section">
                <h4 class="project-card-title"><?php echo $name ?></h4>
                <span class="project-card-langs"><?php echo $languages ?></span>
                <span class="project-card-data"><?php echo $commits ?><i class="fas fa-history"></i><?php echo $stars ?><i class="fas fa-star"></i></span>
            </div>
            <p class="project-card-desc"><?php echo $desc ?></p>
        </a>
    </div>
    <?php
}