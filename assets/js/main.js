$(document).ready(function(){
  $('#reader').html5_qrcode(function(data){
      $('#data').html('<object type="text/html" data="'+data+'" width="100%" height="100%" />');
      $('.camera').css('display','none');
      $('.again').click(function(){
        $('.camera').css('display','block');
      });
    },
    function(error){
      $('#read_error').html(error);
    }, function(videoError){
      $('#vid_error').html(videoError);
    }
  );
});
