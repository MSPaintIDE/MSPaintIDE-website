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
        <p>The MS Paint IDE organization has several projects, ranging in languages used and complexity. These projects
            are either websites for the IDE/related projects, or projects used to make the IDE run.</p>
        <div class="project-card-container">
            <?php
            createProjectCards([
                ['MS Paint IDE', 'Java', '253', '469', 'The main application for the project, contains the GUI and other primary working components of the IDE.', 'https://github.com/MSPaintIDE/MSPaintIDE'],
                ['NewOCR', 'Java', '227', '29', 'The completely custom OCR used by the IDE to get characters from input images. This is used by the IDE but can be used for any application.', 'https://github.com/MSPaintIDE/NewOCR'],
                ['PaintInjector', 'C#', '17', '1', 'This adds native-looking buttons on top of MS Paint, that allows for the IDE’s jar to hook into it.', 'https://github.com/MSPaintIDE/PaintInjector'],
                ['PaintAssistant', 'Java', '5', '2', 'Allows for the client-side authentication and controlling of operations via the Google Assistant through Firebase.', 'https://github.com/MSPaintIDE/PaintAssistant'],
                ['AssistantBackend', 'JavaScript', '7', '2', 'Manages Google Assistant requests on Firebase Functions, and updates the realtime database for clients to listen to.', 'https://github.com/MSPaintIDE/AssistantBackend'],
                ['MSPaintIDE-website', 'HTML, CSS, JavaScript', '42', '3', 'The main website for MS Paint IDE, the one you are currently on.', 'https://github.com/MSPaintIDE/MSPaintIDE-website'],
                ['NewOCR-website', 'HTML, CSS, JavaScript', '2', '0', 'The website for NewOCR, https://newocr.dev/
This repo contains the wiki in another branch, located at https://wiki.newocr.dev/', 'https://github.com/MSPaintIDE/NewOCR-website'],
                ['NewOCRWikiUpdater', 'Java', '4', '0', 'A program to read the wiki’s repo locally and make changes to for inline code references to persist across changes.', 'https://github.com/MSPaintIDE/NewOCRWikiUpdater'],
            ]);
            ?>
        </div>
        <?php endSection(); ?>
    </div>
</div>

<?php include 'includes/footer.php' ?>
</body>
</html>