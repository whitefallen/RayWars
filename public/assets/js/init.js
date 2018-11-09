document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('splash').style['display'] = 'none';
    $('.carousel.carousel-slider').carousel({
        fullWidth: false,
        indicators: true
    });

    var sidenavele = document.querySelectorAll('.sidenav');
    var instancesNav = M.Sidenav.init(sidenavele, null);
    var toolTipElems = document.querySelectorAll('.tooltipped');
    var instancesTooltip = M.Tooltip.init(toolTipElems, null);
});

document.getElementById('app').style['display'] = 'block';
