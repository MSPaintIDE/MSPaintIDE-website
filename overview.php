<?php
include_once 'includes/default-section.php';
include_once 'includes/components.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include 'includes/head.php';
    head('MS Paint IDE - Overview');
    ?>
</head>
<body id="page-top">
<?php include 'includes/navbar.php' ?>

<div class="content">
    <div class="container col-xl-9 first-container">
        <?php startSection('Overview', 'partners', 'large-section'); ?>
        <p>Currently there are no partners, if you are interested in partnering up with MS Paint IDE, send us a message
            at partners@ms-paint-i.de</p>
        <div class="project-card-container">
            <?php
            createProjectCards([
                ['MS Paint IDE', 'Java', '220', '555', 'The main application for the project, contains the GUI and other primary working components of the IDE.'],
                ['NewOCR', 'Java', '226', '29', 'The completely custom OCR used by the IDE to get characters from input images. This is used by the IDE but can be used for any application.'],
                ['PaintInjector', 'C#', '17', '1', 'This adds native-looking buttons on top of MS Paint, that allows for the IDE’s jar to hook into it.'],
                ['PaintAssistant', 'Java', '5', '2', 'Allows for the client-side authentication and controlling of operations via the Google Assistant through Firebase.'],
                ['AssistantBackend', 'JavaScript', '7', '2', 'Manages Google Assistant requests on Firebase Functions, and updates the realtime database for clients to listen to.'],
                ['MSPaintIDE-website', 'HTML, CSS, JavaScript', '42', '3', 'The main website for MS Paint IDE, the one you are currently on.'],
                ['NewOCR-website', 'HTML, CSS, JavaScript', '2', '0', 'The website for NewOCR, https://newocr.dev/
This repo contains the wiki in another branch, located at https://wiki.newocr.dev/'],
                ['NewOCRWikiUpdater', 'Java', '4', '0', 'A program to read the wiki’s repo locally and make changes to for inline code references to persist across changes.'],
            ]);
            ?>
        </div>
        <?php endSection(); ?>
    </div>
</div>

<?php include 'includes/footer.php' ?>
</body>
</html>