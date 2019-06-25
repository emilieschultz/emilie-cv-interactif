function createMagnificPopup(containerId) {
    $('#' + containerId).find('.popup').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        },
        mainClass: 'mfp-with-zoom',
        zoom: {
            enabled: true, // By default it's false, so don't forget to enable it

            duration: 300, // duration of the effect, in milliseconds
            easing: 'ease-in-out', // CSS transition easing function

            // The "opener" function should return the element from which popup will be zoomed in
            // and to which popup will be scaled down
            // By defailt it looks for an image tag:
            opener: function(openerElement) {
                // openerElement is the element on which popup was initialized, in this case its <a> tag
                // you don't need to add "opener" option if this code matches your needs, it's defailt one.
                return openerElement.is('img') ? openerElement : openerElement.find('img');
            }
        }
    });
}



$(document).ready(function() {
    $("header.header").height($(window).innerHeight());

    createMagnificPopup('illustrations');
    createMagnificPopup('logotypes');
    createMagnificPopup('webdesign');

    var offset = 0.8;
    var blocks = $('.rmq-9865a0ae');
    var scrolling = false;

    function checkTimelineScroll() {
        blocks.each(function() {
            console.log(this.getBoundingClientRect().top);
            if (this.getBoundingClientRect().top > window.innerHeight*offset) {

                if ($(this).hasClass('rmq-8d59ac3b')) {
                    $(this).addClass('animated slideInLeft delay-1s');

                } else {
                    $(this).addClass('animated slideInRight delay-1s');

                }

            }
        });

        scrolling = false;
    }

    window.addEventListener("scroll", function(event) {
        if( !scrolling ) {
            scrolling = true;
            (!window.requestAnimationFrame) ? setTimeout(checkTimelineScroll, 250) : window.requestAnimationFrame(checkTimelineScroll);
        }
    });
});
