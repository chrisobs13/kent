// JavaScript Document

$(document).ready(function(){
  $("a.show-login").click(function(event){
    event.preventDefault();
    $("div.login").toggleClass("hidden");
  });
  
});

