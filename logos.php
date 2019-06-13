<?php
include_once 'includes/default-section.php';
include_once 'includes/components.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include 'includes/head.php';
    head('MS Paint IDE - Logos');
    ?>
    <script src="/js/logos.js" async></script>
</head>
<body id="page-top">
<?php include 'includes/navbar.php' ?>

<div class="content">
    <div class="container col-xl-9 first-container">
        <?php startSection('Logos', 'logos', 'large-section'); ?>
        <p>All MS Paint IDE logos are available to be used by anyone to refer to MS Paint IDE, or a project in the
            organization. Logos are available in both PNG and SVG formats.</p>
        <div class="even-card-container resource-card-container top-padded">
            <?php
            createResourceCards([
                [
                    'name' => 'Colored',
                    'image' => '/logos/ms-paint-logo-colored.png',
                    'downloads' => [
                        'PNG' => '/logos/ms-paint-logo-colored.png',
                        'SVG' => '/logos/ms-paint-logo-colored.svg'
                    ]
                ],
                [
                    'name' => 'White',
                    'image' => '/logos/ms-paint-logo-white.png',
                    'downloads' => [
                        'PNG' => '/logos/ms-paint-logo-white.png',
                        'SVG' => '/logos/ms-paint-logo-white.svg'
                    ]
                ],
                [
                    'name' => 'Black',
                    'image' => '/logos/ms-paint-logo.png',
                    'downloads' => [
                        'PNG' => '/logos/ms-paint-logo.png',
                        'SVG' => '/logos/ms-paint-logo.svg'
                    ]
                ],
                [
                    'name' => 'Animated White',
                    'image' => '/logos/ms-paint-logo-animated-white.svg',
                    'info' => 'SVG provides a single animation, where Toggleable requires the class \'animate\' to be added to the SVG content to activate the animation.',
                    'downloads' => [
                        'SVG' => '/logos/ms-paint-logo-animated-white-immediate.svg',
                        'Toggleable' => '/logos/ms-paint-logo-animated-white.svg'
                    ]
                ],
                [
                    'name' => 'Animated Black',
                    'image' => '/logos/ms-paint-logo-animated-black.svg',
                    'info' => 'SVG provides a single animation, where Toggleable requires the class \'animate\' to be added to the SVG content to activate the animation.',
                    'downloads' => [
                        'SVG' => '/logos/ms-paint-logo-animated-black-immediate.svg',
                        'Toggleable' => '/logos/ms-paint-logo-animated-black.svg'
                    ]
                ]
            ]);

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