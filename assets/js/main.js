$(document).ready(function(){
  $('.connect').on('click', function() {
    $('#reader').html5_qrcode(function(data){
        $('#data').html('<object type="text/html" data="'+data+'" width="100%" height="100%" />');
        $('.camera').css('display','none');
      },
      function(error){
        $('#read_error').html(error);
      }, function(videoError){
        $('#vid_error').html(videoError);
      }
    );
  });
  $('.connect').on('click', function(){
    $('.cam').show();
    $('.home').hide();
  });
  $("#owl-demo").owlCarousel({
    navigation : false, // Show next and prev buttons
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem: true
  });
  $('.info-page').on('click', function() {
    $('.home').hide();
    $('.info').show();
  });
});
