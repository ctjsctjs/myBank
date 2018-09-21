
   $("#btn-deposit").click(function(){
    status = "login";
    $(".modal").fadeIn(100);
    $('#modal-login')
    .stop(true, true)
    .animate({
      marginTop: "+=30px",
      opacity: "show"
    },200);
  });
  
  //Modal background click to exit button
  $(".modal").click(function(){
    $(".modal").fadeOut(100);
    if (status == "login"){
      $('#modal-login')
      .stop(true, true)
      .animate({
        marginTop: "-=30px",
        opacity: "hide"
      },200);
      $('#modal-forgotPw').css({
        marginTop: "-=30px",
        display:"none",
      });
    }

    else if (status == "register"){
      $('#modal-register')
      .stop(true, true)
      .animate({
        marginTop: "-=30px",
        opacity: "hide"
      },200);
    }
  });

