<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="QR-Scanner">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>QR-Scanner</title>
		<link rel="stylesheet" href="assets/css/modules/build/defaults.min.css">
    <link rel="stylesheet" href="assets/css/modules/build/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/modules/build/owl.theme.css">
    <link rel="stylesheet" href="assets/css/modules/build/owl.transitions.css">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src='assets/js/html5-qrcode.min.js'></script>
    <script src="assets/js/main.js"></script>
    <style>
    </style>
	</head>
	<body class='animate'>
		<div class='home'>
			<div class='app'>
				<img src='assets/img/scan-logo.png'><br>
				<img src='assets/img/qr-code.png' class='qr-code'><br>
				<ul>
					<li>Touch on the connect button</li>
					<li>Scan the Qr-code</li>
					<li>You will get the information</li>
				</ul>
				<button class='connect'><a href='#'>Connect</a></button><br>
				<p class='c-info'>When you touch on the connect button your device will be connected to the camera.</p>
				<hr>
				<div class='u-info'>
					<p>Do you want more information about the museum such as floor map, history of the musem etc.</p>
					<p>Then <a href='#' class='info-page'>touch here</a> to go to the museum information page.</p>
				</div>
			</div>
		</div>
		<div class='cam animate'>
			<div class='app camera animate'>
	      <div id="reader">
	        <video id="html5_qrcode_video" class='animate' width="650px" height="auto"></video>
	        <canvas id="qr-canvas" width="298px" height="248px" style="display:none;"></canvas>
	        <div id="read_error"></div>
	        <div id="vid_error"></div>
	      </div>
	    </div>
	    <div id="data" class='animate'></div>
	  </div>
	  <div class='info animate'>
	  	<div class='container'>
      <div class='app'>
        <div class='nav-bar'>
          <a href='index.html'><img src='assets/img/scan-logo.png'></a>
          <button class='back info-button'><a href='index.html'>Back</a></button>
        </div>
        <div class='wrapper'>
          <div class='info-wrap'>
            <h1>History of the museum</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pulvinar vel lacus sed luctus. Pellentesque sed pulvinar tortor. Aliquam facilisis tortor dui. Quisque vel suscipit erat. Cras mollis neque non semper vulputate. Nam imperdiet risus sed aliquet ullamcorper. Vestibulum malesuada aliquet eros, ac auctor justo sagittis nec. Donec posuere velit orci, non volutpat nulla consectetur cursus. Donec euismod neque sed sollicitudin placerat.</p>
            <p>Vivamus eros est, convallis non tristique ac, ultricies quis ligula. Ut sed leo tristique, convallis ante ac, fermentum eros. Etiam volutpat blandit justo in dapibus. Maecenas congue at tellus vitae vulputate. Ut ornare faucibus tortor, id ullamcorper metus. Aliquam erat volutpat. Nulla tempor dui id elit molestie luctus. Nulla a egestas enim. Phasellus magna dolor, ornare et libero in, varius iaculis massa. Vivamus risus est, viverra id sollicitudin quis, tristique in velit. Ut feugiat libero vitae massa sodales, in laoreet ligula dapibus. Sed id lacus id ligula sagittis placerat id at lectus. Sed sed orci placerat, viverra velit in, adipiscing justo.</p>
          </div>
          <h1 class='floormap'>Plattegrond</h1>
          <!-- <div class='slider'> -->
            <div id="owl-demo" class="owl-carousel owl-theme">
              <div class="item"><img src="http://mnuurwerk.nl/wp-content/uploads/2013/05/Plattegrond-RMA-1e-verd.jpg" alt=""></div>
              <div class="item"><img src="http://www.dalstra.nl/upload/cache/89347FA56BDF5F814A90541F02102259.jpg" alt=""></div>
            </div>
          <!-- </div> -->
        </div>
        <div class='extra-content'>
          <h1>Extra Content</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pulvinar vel lacus sed luctus. Pellentesque sed pulvinar tortor. Aliquam facilisis tortor dui. Quisque vel suscipit erat. Cras mollis neque non semper vulputate. Nam imperdiet risus sed aliquet ullamcorper. Vestibulum malesuada aliquet eros, ac auctor justo sagittis nec. Donec posuere velit orci, non volutpat nulla consectetur cursus. Donec euismod neque sed sollicitudin placerat.</p>
          <blockquote>Ut sed leo tristique, convallis ante ac, fermentum eros. Etiam volutpat blandit justo in dapibus.</blockquote>
          <p>Vivamus eros est, convallis non tristique ac, ultricies quis ligula. Ut sed leo tristique, convallis ante ac, fermentum eros. Etiam volutpat blandit justo in dapibus. Maecenas congue at tellus vitae vulputate. Ut ornare faucibus tortor, id ullamcorper metus. Aliquam erat volutpat. Nulla tempor dui id elit molestie luctus. Nulla a egestas enim. Phasellus magna dolor, ornare et libero in, varius iaculis massa. Vivamus risus est, viverra id sollicitudin quis, tristique in velit. Ut feugiat libero vitae massa sodales, in laoreet ligula dapibus. Sed id lacus id ligula sagittis placerat id at lectus. Sed sed orci placerat, viverra velit in, adipiscing justo.</p>
        </div>
      </div>
    </div>
	  </div>
	</body>
</html>