setTimeout(function(){
    document.getElementById('app').style['display'] = 'block';
    document.getElementById('splash').style['display'] = 'none';
    $('.carousel.carousel-slider').carousel({
      fullWidth: false,
      indicators: true
    });
    $('.sidenav').sidenav();
}, 1500);
