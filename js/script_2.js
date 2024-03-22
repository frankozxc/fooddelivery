$(document).ready(function(){
	$('.slider2').slick({
		arrows:true,
		dots:true,
		slidesToShow:4,
		autoplay:true,
		speed:2000,
		autoplaySpeed:800,
		responsive:[
			{
				breakpoint: 768,
				settings: {
					slidesToShow:2
				}
			},
			{
				breakpoint: 550,
				settings: {
					slidesToShow:1
				}
			}
		]
	});
});

