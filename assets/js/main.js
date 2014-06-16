$(document).ready(function(){
  $('#reader').html5_qrcode(function(data){
      $('#data').html('<object type="text/html" data="'+data+'" width="100%" height="100%" />');
      $('.app').css('display', 'none');
    },
    function(error){
      $('#read_error').html(error);
    }, function(videoError){
      $('#vid_error').html(videoError);
    }
  );
});
