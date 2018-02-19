
(function ($) {
    // MENU HAMBURGUER ANIMATION --------------------------------
    $('.hamburger-container').click(function () {
        $('#hamburger').toggleClass('open');
        $('#hamburger-content').toggleClass('nav-open');
        $('header').toggleClass('nav-open');
    });

    $('.tree-dots').click(function () {
        $('.li-icons').toggleClass('ative');
        $('header').toggleClass('grad');
        $('.icons-menu').toggleClass('grad');
    });

    $('.testl').click(function () {
        $('#hamburger').removeClass('open');
        $('#hamburger-content').removeClass('nav-open');
        $('header').removeClass('nav-open');
    });



    // Cache selectors
    var lastId,
        topMenu = $(".ancor , .menu-item"),
        // All list items
        menuItems = topMenu.find("a"),
        // Anchors corresponding to menu items
        scrollItems = menuItems.map(function () {
            var item = $($(this).attr("href"));
            if (item.length) {
                return item;
            }
        });

    // Bind click handler to menu items
    // so we can get a fancy scroll animation
    menuItems.click(function (e) {

        var href = $(this).attr("href")
            //offsetTop = href === "#" ? 0 : $(href).offset().top+2;
        $('html, body').stop().animate({
            scrollTop: href === "#" ? 0 : $(href).offset().top - 58
        }, 1500);

        e.preventDefault();
    });


// MAIN MENU ANIMATION
    // Menu change
    var nav = $('header');

    $(window).scroll(function () {
        if ($(this).scrollTop() > 136) {
            nav.addClass("active");
        } else {
            nav.removeClass("active");
        }
    });





    if(screen.width < 1025){
		//Código para setar o Height em 100% fixVH IOSproblem
		var bg = $("#hero");

		function resizeBackground() {
		bg.height($(window).height());
	}

	$(window).resize(resizeBackground);
	resizeBackground();

}

	//Tabs
    $('.tabs').tabs();


  $('.dropdown-button').dropdown('open');


    if (screen.width > 900) {

      var swiper = new Swiper('.big-slide', {
          slidesPerView: 3,
          spaceBetween: 30,
          //slidesOffsetBefore: 250,
          grabCursor: 'false',
          keyboard: {
            enabled: true,
          },
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.swiper-button-next.big',
            prevEl: '.swiper-button-prev.big',
          },
        });

      var swiper = new Swiper('.small-slide', {
          slidesPerView: 3,
          spaceBetween: 30,
          //slidesOffsetBefore: 250,
          grabCursor: 'false',
          keyboard: {
            enabled: true,
          },
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.swiper-button-next.small',
            prevEl: '.swiper-button-prev.small',
          },
        });

    }


    if (screen.width < 900) {

      var swiper = new Swiper('.big-slide', {
          slidesPerView: 1,
          spaceBetween: 60,
          //slidesOffsetBefore: 250,
          grabCursor: 'false',
          keyboard: {
            enabled: true,
          },
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.swiper-button-next.big',
            prevEl: '.swiper-button-prev.big',
          },
        });

      var swiper = new Swiper('.small-slide', {
          slidesPerView: 1,
          spaceBetween: 60,
          //slidesOffsetBefore: 250,
          grabCursor: 'false',
          keyboard: {
            enabled: true,
          },
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
          navigation: {
            nextEl: '.swiper-button-next.small',
            prevEl: '.swiper-button-prev.small',
          },
        });

    }


})(jQuery);
