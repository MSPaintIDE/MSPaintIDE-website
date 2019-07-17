<?php
include_once 'includes/default-section.php';
include_once 'includes/components.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include 'includes/head.php';
    head('MS Paint IDE - About');
    ?>
</head>
<body id="page-top">
<?php include 'includes/navbar.php' ?>

<div class="content">
    <div class="container col-xl-9 first-container">
        <?php startSection('About', 'about', 'large-section'); ?>
        <p>MS Paint IDE strives to be not only a great and real development platform, but a set of projects meant to
            encompass many fields of research and knowledge, compared to the ‘traditional’ IDE. The IDE may seem like a
            joke, but the research and development gone into it is most definitely not.</p>
        <?php
        endSection();
        startSection('History', 'history');

        ?>
        <div class="history-card-container">
            <?php
            createHistoryBoxes([
                ['Initial Conception/Release', '12/9/17 - 12/11/17', 'The initial time of to make and release the IDE took just a single weekend. The original post about it was on SpigotMC, where it quickly gained popularity.'],
                ['1.x Updates', '12/13/17 - 12/14/17', 'Shortly after the post on SpigotMC gained in popularity, more basic  features were added. By this time, the hype died down and the IDE’s development became stagnant.'],
                ['Git Features, UI overhaul', '4/16/2018 - 8/30/2018', 'The IDE was mentioned a few times during these months, so some more features were added. A single update to change the UI completely, and then later on some updates to add Git, increased performance, and various other things.'],
                ['Popularity Explosion', '9/9/2018 - 9/12/2018', 'A small update with the inclusion of a demo/installation video was posted. Posted on Reddit twice by RubbaBoy on 9/10/2018, but only when it was posted a few hours later by another user on 9/11/2018 did the project gain substantial popularity. Shortly afterwards, the project was featured on several tech news websites, including Hackernews and Tweakers, and shared in many places, racking up millions of website requests.'],
                ['Complete Overhaul', '9/12/2018 - 7/17/2019', 'New projects have been made for the IDE, including NewOCR, PaintInjector, and PaintAssist. Many bugs have been fixed since the last release in September of 2018, and substantial features have been added.'],
            ]);
            ?>
        </div>
        <?php endSection(); ?>
    </div>
</div>

<?php include 'includes/footer.php' ?>
</body>
</html>