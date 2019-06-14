<?php
include_once 'includes/default-section.php';
include_once 'includes/components.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include 'includes/head.php';
    head('MS Paint IDE - Downloads');
    ?>
    <script src="/js/downloads.js" async></script>
</head>
<body id="page-top">
<?php include 'includes/navbar.php' ?>

<div class="content">
    <div class="container col-xl-9 first-container">
        <?php startSection('Downloads', 'downloads', 'large-section'); ?>
        <div class="download-card-container"></div>
        <?php endSection(); ?>
    </div>
</div>

<?php include 'includes/footer.php' ?>
</body>
</html>