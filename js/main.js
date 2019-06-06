//Responsive
var $window = $(window);

function checkWidth() {
    var windowsize = $window.width();
    if (windowsize > 576) {
        const cursor = document.querySelector('.cursor');

        document.addEventListener('mousemove', e => {
            cursor.setAttribute("style", "top: "+(e.pageY - 32)+"px; left: "+(e.pageX - 32)+"px;")
        });

        document.addEventListener('click', () => {
            cursor.classList.add("expand");
            setTimeout(() => {
                cursor.classList.remove("expand");
            }, 500)
        });

        $(window).scroll(function (event) {
            var scroll = $(window).scrollTop();
            var data = $('.data');
            var nav = $('.navbar');
            var navHeight = $('.navbar').outerHeight();

            if(scroll > 0) {
                nav.css({
                    "position": "fixed",
                    "width":"100%",
                    "z-index":"9999"
                });
            } else {
                nav.css("position","relative");
            }
            
            if(scroll > nav.height()) {
                console.log(scroll);
                console.log(nav.height());
                data.css({
                    "position": "fixed",
                    "max-width": "350px",
                    "top": navHeight+"px"
                });
            } else {
                data.css({
                    "position": "relative",
                    "top":"0px"
                });
            }
        });
    }
}
// Execute on load
checkWidth();
$(window).resize(checkWidth);

$('.search-item').hover(function() {
    $('.search').attr('src','assets/icons/search-red.svg');
}, function() {
    $('.search').attr('src','assets/icons/search.svg');
});