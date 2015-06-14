$(document).ready(function() {
 
  $("#main-carousel").owlCarousel({
   
       autoPlay: 10000, //Set AutoPlay to 3 seconds  
       singleItem : true,
       transitionStyle : "fadeUp"
       
       
     });

  $("#idealizadores-carousel").owlCarousel({
   
      autoPlay: 10000, //Set AutoPlay to 3 seconds
      
      items : 6,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
      
    });

  $("a[rel^='prettyPhoto']").prettyPhoto(
   {theme: 'light_square',
   slideshow:5000, 
   allow_resize: true,
   social_tools: '',

   autoplay_slideshow:false});


  $("#galeria-carousel").owlCarousel({
   
      //autoPlay: 10000, //Set AutoPlay to 3 seconds
      
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
      
    });
  
  $body = $("body");
  $('#contato-form').on('beforeSubmit', function(event, jqXHR, settings) {

   $body.addClass("loading");

   var form = $(this);
   
   if(form.find('.has-error').length) {
    return false;
  }

  $.ajax({
    url: form.attr('action'),
    type: 'post',
    data: form.serialize(),
    success: function(data) {
     $body.removeClass("loading");
     alert('Sua mensagem foi enviada com sucesso!')
     $('#contato-form input').val("");
     $('#contato-form textarea').val("");
     $('#logomarca').click();


   }
 });

  return false;
});

//   $('#busca-form').on('beforeSubmit', function(event, jqXHR, settings) {

//     $body.addClass("loading");

//     var form = $(this);
    
//     if(form.find('.has-error').length) {
//       return false;
//     }

//     $.ajax({
//       url: form.attr('action'),
//       type: 'post',
//       data: form.serialize(),
//       success: function(data) {
//        $body.removeClass("loading");
//        alert('Sua mensagem foi enviada com sucesso!')
//        $('#busca-form input').val("");
//        $('#busca-form textarea').val("");
// //             $('#logomarca').click();


// }
// });

//     return false;
//   });



});