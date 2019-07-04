<?php
include_once 'includes/default-section.php';
include_once 'includes/components.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include 'includes/head.php';
    head('MS Paint IDE - Stats');
    ?>
</head>
<body id="page-top">
<?php include 'includes/navbar.php' ?>

<div class="content">
    <div class="container col-xl-9 first-container">
        <?php startSection('Stats', 'stats', 'large-section'); ?>
        <p>The organization contains several repos revolving around the IDE, most of which are being constantly worked on. More statistics are coming soon.</p>
        <?php
        createStatsCard(577, 11, 601);
        endSection();
        ?>
    </div>
</div>

<?php include 'includes/footer.php' ?>
</body>
</html>