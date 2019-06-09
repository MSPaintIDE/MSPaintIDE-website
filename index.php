<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include 'includes/head.php';
    head('MS Paint IDE')
    ?>
</head>
<body id="page-top">
<?php include 'includes/navbar.php' ?>

<div class="container-fluid main-center">
    <div class="row justify-content-md-center">
        <object class="logo col-xl-3 col-lg-4" onload="startAnimation()" data="logos/ms-paint-logo-animated-white.svg" type="image/svg+xml"></object>
    </div>

    <div class="row justify-content-md-center">
        <h1 class="main-header text-center col-xl-4 col-xl-5">MS Paint IDE</h1>
    </div>

    <div class="row justify-content-md-center">
        <div class="button-container d-flex justify-content-center col-xl-4 col-xl-5">
            <a class="btn btn-black-outline" href="#">Demo</a>
            <a class="btn btn-black-outline" href="#">Wiki</a>
            <a class="btn btn-black-outline" href="#">Open Source</a>
        </div>
    </div>
</div>

<?php include 'includes/footer.php' ?>
</body>
</html>