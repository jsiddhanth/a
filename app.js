
$(document).ready(function(){

  $(".modal-btn").click(function(){
  
    $(".modal-bg").addClass("bg-active");

  });

  $(".modal-close").click(function(){
  
    $(".modal-bg").removeClass("bg-active");

  });
});

