setTimeout(function(){
    document.getElementById('app').style['display'] = 'block';
    document.getElementById('splash').style['display'] = 'none';
    $('.carousel.carousel-slider').carousel({
      fullWidth: false,
      indicators: true
    });    
}, 1500);

document.addEventListener('DOMContentLoaded', function() {
  var sidenavele = document.querySelectorAll('.sidenav');
  var instancesNav = M.Sidenav.init(sidenavele, null);
});

