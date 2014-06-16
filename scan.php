 <?php header('Access-Control-Allow-Origin: *'); ?>
 <!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="QR-Scanner">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QR-Scanner</title>
    <link rel="stylesheet" href="assets/css/modules/build/defaults.min.css">
    <script src="assets/js/jquery.js"></script>
    <script src='assets/js/html5-qrcode.min.js'></script>
    <script src="assets/js/main.js"></script>
  </head>
  <body>
    <div class='app camera'>
      <div id="reader">
        <video id="html5_qrcode_video" width="650px" height="auto"></video>
        <canvas id="qr-canvas" width="298px" height="248px" style="display:none;"></canvas>
        <div id="read_error"></div>
        <div id="vid_error"></div>
      </div>
    </div>
    <!-- <div class='holder'>
      <div class='container'>
        <div class='app'>
          <div class='nav-bar'>
            <button class='connect again'><a href='#'>Again</a></button>
          </div>
        </div>
      </div> -->
      <div id="data"></div>
    <!-- </div> -->
  </body>
</html>
