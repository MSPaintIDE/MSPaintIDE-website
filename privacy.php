<?php
include_once 'includes/default-section.php';
include_once 'includes/components.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include 'includes/head.php';
    head('MS Paint IDE - Privacy');
    ?>
    <style>
        .section-content a {
            color: #007bff !important;
        }
    </style>
</head>
<body id="page-top">
<?php include 'includes/navbar.php' ?>

<div class="content">
    <div class="container col-xl-9 first-container">
        <?php startSection('Privacy Policy Of MS Paint IDE', 'privacy-policy', 'large-section'); ?>
        <p>
            Privacy Policy for MS Paint IDE on the Google Assistant
        </p>
        <p>
            The content for MS Paint IDE has been developed by Adam Yarris. However, MS Paint IDE runs on systems
            provided by Google, and Adam does not have full access to the app. In particular, Adam has no
            ability to access the messages you send to MS Paint IDE or the responses that it sends back to you.
        </p>
        <p>
            Adam may receive from Google non-personally identifying information about the use of MS Paint IDE.
            For instance, Adam can access usage information regarding how many users are using the app, which
            geographical regions they are located in, and basic data including users’ language, device type, and length
            and frequency of use. None of the information Adam receives from Google identifies you, nor does it
            reveal to Adam what information you sent to the app or what specific responses the app sent to you.
        </p>
        <p>
            When you use MS Paint IDE, you are also using the Google Assistant, and the
            <a href="https://www.google.com/policies/privacy/">Google Privacy Policy</a>
            describes how Google collects and uses data about your use of the app. You may wish to consult Google’s
            documentation regarding <a href="https://support.google.com/assistant/answer/7126196">what information is
                shared with your Google Assistant</a> and <a href="https://support.google.com/assistant/answer/7108295">how
                to delete your Google
                Assistant activity</a>.
        </p>
        <p>
            Adam may, in the future, modify MS Paint IDE to run on infrastructure which Adam has full
            access to, which would allow Adam access to additional information about your interaction with the app.
            Should that occur, Adam will comply with its obligations under applicable privacy law, including
            updating this Privacy Policy as required.
        </p>
        <?php endSection(); ?>
    </div>
</div>

<?php include 'includes/footer.php' ?>
</body>
</html>