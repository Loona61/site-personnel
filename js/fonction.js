// animation competences
$('.chart').easyPieChart({
    scaleColor: "#ecf0f1",
    lineWidth: 20,
    lineCap: 'butt',
    barColor: 'rgba(153, 0, 0, 1)',
    trackColor:	"rgba(255, 255, 255, 0.3)",
    size: 160,
    animate: 3000
});

// affichage bouton back to the top and animation
jQuery(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});

});

// Sections height
var sH = $(window).height();
$('#entete').css('height', sH + 'px');
$('.background').css('height', sH + 'px');
$(window).resize(function() {
    var sH = $(window).height();
    $('#entete').css('height', sH + 'px');
    $('.background').css('height', sH + 'px');
});       
        
//animation portfolio
function init() {
    var speed = 250,
        easing = mina.easeinout;

    [].slice.call(document.querySelectorAll('#grid > a')).forEach(function (el) {
        var s = Snap(el.querySelector('svg')),
            path = s.select('path'),
            pathConfig = {
                from: path.attr('d'),
                to: el.getAttribute('data-path-hover')
                };

                el.addEventListener('mouseenter', function () {
                    path.animate({
                        'path': pathConfig.to
                        }, speed, easing);
                });

                el.addEventListener('mouseleave', function () {
                    path.animate({
                        'path': pathConfig.from
                        }, speed, easing);
                });
    });
}

init();

//animation deplacement vers les ancres
$('a[href^="#"]').click(function(){
	var the_id = $(this).attr("href");

	$('html, body').animate({
		scrollTop:$(the_id).offset().top
	}, 'slow');
	return false;
});