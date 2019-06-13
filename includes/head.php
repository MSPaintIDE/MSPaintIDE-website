<?php
function head($title) {
    ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-84382008-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-84382008-3');
    </script>

    <script type="application/ld+json">
{
    "@context": "http://schema.org",
    "@type": "SoftwareApplication",
    "name": "MS Paint IDE",
    "image": "https://ms-paint-i.de/logos/ms-paint-logo-colored.png",
    "downloadUrl": "https://github.com/MSPaintIDE/MSPaintIDE/releases/latest",
    "featureList": "Read your images from Paint and compile, execute, and highlight them",
    "softwareVersion": "2.1.1",
    "operatingSystem": "Windows",
    "applicationCategory": "Software Development",
    "copyrightYear": "2017",
    "keywords": "MS Paint, MS Paint IDE, IDE, Java, RubbaBoy, Google Assistant",
    "license": "https://github.com/MSPaintIDE/MSPaintIDE/blob/master/LICENSE.txt",
    "copyrightHolder": {
        "@type": "Person",
        "name": "Adam Yarris"
    },
    "author": {
        "@type": "Person",
        "name": "Adam Yarris"
    },
    "sameAs": [
        "https://github.com/MSPaintIDE",
        "https://twitter.com/MSPaintIDE"
    ]
}
    </script>

    <title><?php echo $title; ?></title>
    <meta charset="UTF-8">
    <meta name="description"
          content="Ditch IDEs like Intellij and glorified text editors like Eclipse, and switch to a real IDE, MS Paint.">
    <meta name="keywords" content="MS Paint, MS Paint IDE, IDE, Java, RubbaBoy, Google Assistant">
    <meta name="author" content="RubbaBoy">
    <meta name="theme-color" content="#1B1C1D">
    <meta name="msapplication-navbutton-color" content="#1B1C1D">
    <meta name="apple-mobile-web-app-status-bar-style" content="#1B1C1D">
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@MSPaintIDE"/>
    <meta name="twitter:creator" content="@MSPaintIDE"/>
    <meta name="twitter:image" content="https://ms-paint-i.de/logos/ms-paint-logo-colored.png"/>
    <meta property="og:title" content="MS Paint IDE">
    <meta property="og:description"
          content="Ditch IDEs like Intellij and glorified text editors like Eclipse, and switch to a real IDE, MS Paint.">
    <meta property="og:image" content="https://ms-paint-i.de/logos/ms-paint-logo-colored.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styles.css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto&display=swap" rel="stylesheet">
    <script src="/js/script.js"></script>

    <link rel="icon" type="image/png" href="/favicon.png">
    <?php
}
?>
