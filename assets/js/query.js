$(document).ready(function(){


$('#select').click(function() {

 var id = $(this).children(":selected").attr("id");

 if (id === 'red') {
   $("#changecolor").css("color", "red");
 }else if(id === 'blue'){
   $("#changecolor").css("color", "blue");
 }else if(id === 'gray'){
   $("#changecolor").css("color", "gray");
 }else if(id === 'purple'){
     $("#changecolor").css("color", "purple");
 }else{
      $("#changecolor").css("color", "black");
 }

   });

  $( "#datepicker" ).datepicker();

   });
