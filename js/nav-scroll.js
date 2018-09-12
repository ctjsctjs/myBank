/*
  Function to toggle navigation bar background when scrolled
*/
$(function () {
  $(".workato-logo").attr("src", "images/workatoDeveloper_logo.svg")
  $("#nav-dummy").removeClass("nav-dummy");

  $(document).scroll(function () {
	  var $nav = $(".nav-bar");
    var $bg = $(".nav-bg");
    var $content = $(".nav-bar .nav-link-wrapper ul li a");
    var $logo = $(".workato-logo");

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
