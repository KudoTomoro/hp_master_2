$(document).ready(function() {
  $(window).scroll(function(){
    var scrollTop = $(window).scrollTop();
    if (scrollTop >= 30) {
      $("body").addClass("sticky");
      // $('.l-header__logo').children('img').attr('src', '{{ asset('images/logo.png') }}');
    } else {
      $("body").removeClass("sticky");
    }
  });
});
