<?php
include_once 'includes/default-section.php';
include_once 'includes/components.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include 'includes/head.php';
    head('MS Paint IDE - About')
    ?>
</head>
<body id="page-top">
<?php include 'includes/navbar.php' ?>

<div class="content">
    <div class="container col-xl-9 first-container">
        <?php startSection('About', 'about', 'large-section'); ?>
        <p>MS Paint IDE strives to be not only a great and real development platform, but a set of projects meant to encompass many fields of research and knowledge, compared to the ‘traditional’ IDE. The IDE may seem like a joke, but the research and development gone into it is most definitely not.</p>
        <?php
        endSection();
        startSection('History', 'history');
        ?>

        <div class="even-card-container">
            <?php

            ?>
        </div>

        <?php
        endSection();
        ?>
    </div>
</div>

<?php include 'includes/footer.php' ?>
</body>
</html>