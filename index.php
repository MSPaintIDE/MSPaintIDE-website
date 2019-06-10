<?php
include_once 'includes/default-section.php';
include_once 'includes/components.php';
?>

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

<div class="container col-xl-9">
    <?php startSection('About'); ?>
    <p>MS Paint IDE is a program that can read a normal image file saved with MS Paint, and can then translate it to
        text with the ability to highlight the text in the image, parse the code, compile and execute it. It provides a
        clean and simple interface, with your actual programming in a program you and millions of others already know
        how to use, and already have. MS Paint IDE allows the use of external libraries, multiple classes, and much much
        more.</p>
    <div class="m-auto col-12 col-md-10 col-lg-10">
        <div class="video-container">
            <iframe class="demo-video" src="https://www.youtube.com/embed/eyH4aXlB1Js" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <?php endSection(); ?>

    <?php startSection('Features'); ?>

    <div class="even-card-container">
        <?php
        $featureData = [
                ['Assistant Support', 'MS Paint IDE supports basic IDE actions on the Google Assistant, to be used on a Google Home, or just on your phone.', '#'],
                ['Highlighting', 'The most advanced code highlighting is packaged with the IDE, allowing to make your code not just run beautifully, but look beautiful as well.', '#'],
                ['Parsing', 'Top of the line parsing is just standard with MS Paint IDE, providing with sometimes a 99% accuracy reading and parsing your programs.', '#'],
                ['Git', 'MS Paint IDE has all the essential Git features, including and limited to creating a git repository, adding a remote origin, adding files, and committing/pushing.', '#'],
                ['Theming', 'Don’t quite like how something looks in the IDE? Change it! All colors in the IDE are changeable, so you can make, share, and use themes.', '#'],
                ['Fastest Growing', 'The fastest growing IDE by our polls, with the most features of any modern day IDE. Since this features section isn\'t legally binding, we can say that.', '#'],
        ];

        foreach ($featureData as $data) {
            createInfoCard($data[0], $data[1], $data[2]);
        }
        ?>
    </div>

    <?php endSection(); ?>
</div>

<?php include 'includes/footer.php' ?>
</body>
</html>