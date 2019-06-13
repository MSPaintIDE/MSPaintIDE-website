window.onload = function () {
    runAnimation();
    setInterval(() => runAnimation(), 3500);

    function runAnimation() {
        let preloaderImages = document.querySelectorAll(".svg-logo-preview");

        preloaderImages.forEach(image => {
            let classList = image.contentDocument.getElementsByTagName('svg')[0].classList;
            classList.remove('animate');
            setTimeout(() => {
                classList.add('animate');
            }, 100);
        });
    }

    $('[data-toggle="popover"]').popover();
};