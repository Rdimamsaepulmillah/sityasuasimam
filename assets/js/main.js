$(document).ready(function(){});

    $('#hero-area-slider').ownlCarousel({
        loop:true,
        nav : true,
        //mouseDrag:false,
        item : 1,
        dots:false,
        margin : 0,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        navContainer : '#hero-area-nav',
    )};    

$('#tenaga-pendidik-slider').ownlCarousel({
    loop: true,
    nav: true,
    // MousDrag: false,
    item: 3,
    dots:false,
    margin: 0,
    navText:[
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    //naContainer: '#hero-area-nav',
});
