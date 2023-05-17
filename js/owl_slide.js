var owl = $('.owl-carousel');
owl.owlCarousel({
    items:3,
    loop:true,
    nav:false,
    margien:10,
    autoplay:false,
    autoplayTimeout:6000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[100])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})

owl.on('changed.owl.carousel', function(event) {
  var current = event.item.index;

  // Adiciona classe 'centro' ao item central
  $('.owl-item').removeClass('centro');
  $('.owl-item').eq(current + 1).addClass('centro');
});
// Adiciona a classe 'centro' ao item do meio inicialmente
var items = $('.owl-item');
var centerIndex = Math.floor(items.length / 2);
items.eq(centerIndex).addClass('centro');
