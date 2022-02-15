console.log("=== Javascript file ===")


$(document).ready(() => {
    var owl = $("#custom-owl-carousel").owlCarousel({
        slideSpeed : 100,
        paginationSpeed : 100,
   
        items : 1, 
        itemsDesktop : false,
        itemsDesktopSmall : false,
        itemsTablet: false,
        itemsMobile : false,

        dotsContainer: "#custom-owl-dots"
   
    });
    $('.owl-dot').click(function () {
        owl.trigger('to.owl.carousel', [$(this).index(), 300]);
        console.log("test");
    });
})

