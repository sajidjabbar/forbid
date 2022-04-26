<!-- Jquery JS-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" type="text/javascript"></script>
<!-- Jquery JS -->
   <!-- Bootstrap CDN -->
   <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Bootstrap CDN -->
<!-- Slick Slider CDN -->
<script type="text/javascript" src="slick/slick.min.js"></script>
<script src="js/wow.min.js"></script>
    <!-- Slick Slider CDN -->
<script>

$('.the-all-reviews-start').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 1500,
    dots: true,
    swipeToSlide: true,
    centralmode: true,

});
    $(document).ready(function () {
        $(window).on('load', function(){
            $("#preloader").fadeOut(1000);
        });
    })
// WoW js 
new WOW().init();
// WoW js 
// Active js 
const CurrentLocation = location.href;
const menuItem = document.querySelectorAll('.navbarMenu ul li a');
const menuLength = menuItem.length
for (let i = 0; i < menuLength; i++) {
    if (menuItem[i].href === CurrentLocation) {
        menuItem[i].className = "active";
    }
}
// Active js 

// Mobile Nav
$('document').ready(function() {
    $('#header .canvas-icon i').click(function() {
        $("#header .mobile-header").addClass('show');
    });

    $('#header .mobile-header .cancel').click(function() {
        $("#header .mobile-header").removeClass('show');
    });
});
// Mobile Nav

//Banner Slider 

//Banner Slider
</script>