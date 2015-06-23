$(".subnav i").click(function() {
	$(".subnav ul").toggleClass("db");
});

$('.topslider').bxSlider({
	auto : true,
	buildPager : function(slideIndex) {
		switch(slideIndex) {
		case 0:
			return '01';
		case 1:
			return '02';
		case 2:
			return '03';
		case 3:
			return '04';
		case 4:
			return '05';
		case 5:
			return '06';
		}
	}
});

$('.middleslider').bxSlider({
	auto : true,
	controls : false,
	pager : false
});