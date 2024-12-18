
(function ($) {
  $.fn.scroller = function (options) {

    var settings = $.extend({
      scrollSpeed: 750,
      menuClassName: 'scroller',
      activeClass: 'active'
    }, options);

    // Local vars
    var scrollSpeed = settings.scrollSpeed;
    var activeClass = settings.activeClass;
    var menuClassName = settings.menuClassName;

    this.addClass(menuClassName);

    var menu = $('.' + menuClassName);
    var menuLinks = $('.' + menuClassName + ' a');
    var menuTop = menu.offset().top;
    var sectionPos = [];

    $(window).scroll(function () {
      if (menuTop < $(window).scrollTop()) {
        menu.addClass('fixed');
        $('body').css('padding-top', menu.height());
      } else if (menuTop > $(window).scrollTop()) {
        menu.removeClass('fixed');
        $('body').css('padding-top', 0);
      }

      // If it is bottom of the page and last section is smaller then viewport height
      if ($(window).scrollTop() + $(window).height() == $(document).height()) {
        menuLinks.removeClass(activeClass);
        sectionPos[sectionPos.length - 1].link.addClass(activeClass);
      } else {
        // Get active section and make appropriate link active
        sectionPos.forEach(function (pos) {
          if ($(window).scrollTop() >= pos.top && $(window).scrollTop() < pos.bottom) {
            menuLinks.removeClass(activeClass);
            pos.link.addClass(activeClass);
            // When position above sections remove active links
          } else if ($(window).scrollTop() < sectionPos[0].top) {
            menuLinks.removeClass(activeClass);
          }
        });
      }
    });

    return menuLinks.each(function (index) {

      // Get section id
      var id = $(this).attr('href').substr(1);
      // Get section active area position
      var top = $('#' + id).offset().top - menu.height();
      var bottom = top + $('#' + id).height();

      sectionPos.push({
        link: $(this),
        top: top,
        bottom: bottom
      });

      $(this).on('click', function (e) {
        e.preventDefault();
        // Move to a given section
        var sectionOffset = $("#" + id).offset().top - menu.height();
        console.log(sectionPos);
        $('html, body').animate({scrollTop: Math.ceil(sectionOffset)}, scrollSpeed);
      });
    });
  };

}(jQuery));
