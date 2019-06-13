window.onload = function() {
    $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: (target.offset().top - 70)
                }, 1000, "easeInOutExpo");
                return false;
            }
        }
    });
};

function startAnimation() {
    setTimeout(function() {
        var preloaderImage = document.getElementsByClassName('logo')[0];
        preloaderImage.contentDocument.getElementsByTagName('svg')[0].classList.add('animate');
    }, 500);
}