function startAnimation() {
    var preloaderImage = document.getElementById('preloader-image');
    preloaderImage.contentDocument.getElementsByTagName('svg')[0].classList.add('preloader');

    setTimeout(function() {
        var interval = setInterval(function() {
            document.getElementsByTagName('my-app')[0].classList.add("completed");

            if (document.getElementById('preloader-image') == null) clearInterval(interval);
        }, 100);
    }, 3000);
}