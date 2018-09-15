/*
  Function to toggle navigation bar background when scrolled
*/
$(function () {
  $(document).scroll(function () {
	  var $nav = $(".nav-bar");
    var $bg = $(".nav-bg");
    var $content = $(".nav-bar .nav-link-wrapper ul li a");

    $nav.toggleClass("scrolled-nav", $(this).scrollTop() > $nav.height());
	  
    if($nav.hasClass("scrolled-nav")){
      $bg.addClass("scrolled-bg");
      $nav.addClass("white-nav");
    } else {
      $bg.removeClass("scrolled-bg");
      $nav.removeClass("white-nav");
    }
	});
});
