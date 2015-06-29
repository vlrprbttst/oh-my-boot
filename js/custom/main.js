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

$('.shopslider').bxSlider({
	minSlides : 1,
	maxSlides : 5,
	slideWidth : 400,
	slideMargin : 0
});

//instagram
var userFeed = new Instafeed({
	get : 'user',
	userId : 1429831284,
	accessToken : '1429831284.467ede5.c1bb745ad06e412ba1243b72b2b6c400',
	limit : 10,
	resolution : 'standard_resolution',
	template : '<a href="{{link}}" target="_blank"><div class="insta-wrapper"><img class="full" src="{{image}}"></div></a>'
});
userFeed.run();

// menu

function navPlaceholder() {
var navigationWrapper = $(".navigation-subwrapper").outerHeight(true);
	$(".navigation-wrapper").css("min-height", navigationWrapper + "px");
};

navPlaceholder();

$(window).resize(navPlaceholder);

$(window).scroll(function() {
	var scroll = $(window).scrollTop();
	if (scroll > 0) {

		$(".navigation-subwrapper").addClass("sticky");

	} else {
		$(".navigation-subwrapper").removeClass("sticky");
	}
}); 


    $(function () {
        
 
        $("nav ul li a, footer li a").bind("click", function (a) {
            var b = $(this);
            var navigationWrapper = $(".navigation-subwrapper").outerHeight(true);
            $(".subnav ul").removeClass("db");
            $("html, body").stop().animate({
                scrollTop: $(b.attr("href")).offset().top - navigationWrapper
            }, 1400);
            a.preventDefault()
        })
    });
	