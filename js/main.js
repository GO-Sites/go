//2. responsive
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