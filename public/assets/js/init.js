setTimeout(function(){
    document.getElementById('app').style['display'] = 'block';
    document.getElementById('splash').style['display'] = 'none';
    $('.carousel.carousel-slider').carousel({
      fullWidth: false,
      indicators: true
    });    
}, 1500);

document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('.sidenav');
  var instances = M.Sidenav.init(elems, null);
});
