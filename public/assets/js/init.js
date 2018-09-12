setTimeout(function(){
    document.getElementById('app').style['display'] = 'block';
    document.getElementById('splash').style['display'] = 'none';
    $('.carousel.carousel-slider').carousel({
      fullWidth: false,
      indicators: true
    });
}, 3000);
