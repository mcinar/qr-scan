<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="QR-Scanner">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QR-Scanner</title>
    <link rel="stylesheet" href="../assets/css/modules/build/defaults.min.css">
    <link rel="stylesheet" href="../assets/css/modules/build/owl.carousel.css">
    <link rel="stylesheet" href="../assets/css/modules/build/owl.theme.css">
    <link rel="stylesheet" href="../assets/css/modules/build/owl.transitions.css">
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script>
      $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : false, // Show next and prev buttons
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem: true
        });
      });
    </script>
  </head>
  <body>
    <div class='container'>
      <div class='app'>
        <div class='nav-bar'>
          <a href='../index.php'><img src='../assets/img/scan-logo.png'></a>
          <button class='connect again'><a href='../scan.php'>Again</a></button>
        </div>
        <div class='wrapper'>
          <div class='info-wrap'>
            <h1>Artwork</h1>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pulvinar vel lacus sed luctus. Pellentesque sed pulvinar tortor. Aliquam facilisis tortor dui. Quisque vel suscipit erat. Cras mollis neque non semper vulputate. Nam imperdiet risus sed aliquet ullamcorper. Vestibulum malesuada aliquet eros, ac auctor justo sagittis nec. Donec posuere velit orci, non volutpat nulla consectetur cursus. Donec euismod neque sed sollicitudin placerat.</p>

            <p>Vivamus eros est, convallis non tristique ac, ultricies quis ligula. Ut sed leo tristique, convallis ante ac, fermentum eros. Etiam volutpat blandit justo in dapibus. Maecenas congue at tellus vitae vulputate. Ut ornare faucibus tortor, id ullamcorper metus. Aliquam erat volutpat. Nulla tempor dui id elit molestie luctus. Nulla a egestas enim. Phasellus magna dolor, ornare et libero in, varius iaculis massa. Vivamus risus est, viverra id sollicitudin quis, tristique in velit. Ut feugiat libero vitae massa sodales, in laoreet ligula dapibus. Sed id lacus id ligula sagittis placerat id at lectus. Sed sed orci placerat, viverra velit in, adipiscing justo.</p>
          </div>
          <div class='slider'>
            <div id="owl-demo" class="owl-carousel owl-theme">
              <div class="item"><img src="../assets/img/arts/2014/kunstwerk/map-eu.png" alt=""></div>
              <div class="item"><img src="../assets/img/arts/2014/kunstwerk/map-us.png" alt=""></div>
              <div class="item"><img src="../assets/img/arts/2014/kunstwerk/map-asia.png" alt=""></div>
            </div>
          </div>
        </div>
        <div class='extra-content'>
          <h1>Extra Content</h1>

          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pulvinar vel lacus sed luctus. Pellentesque sed pulvinar tortor. Aliquam facilisis tortor dui. Quisque vel suscipit erat. Cras mollis neque non semper vulputate. Nam imperdiet risus sed aliquet ullamcorper. Vestibulum malesuada aliquet eros, ac auctor justo sagittis nec. Donec posuere velit orci, non volutpat nulla consectetur cursus. Donec euismod neque sed sollicitudin placerat.</p>

          <blockquote>Ut sed leo tristique, convallis ante ac, fermentum eros. Etiam volutpat blandit justo in dapibus.</blockquote>

          <p>Vivamus eros est, convallis non tristique ac, ultricies quis ligula. Ut sed leo tristique, convallis ante ac, fermentum eros. Etiam volutpat blandit justo in dapibus. Maecenas congue at tellus vitae vulputate. Ut ornare faucibus tortor, id ullamcorper metus. Aliquam erat volutpat. Nulla tempor dui id elit molestie luctus. Nulla a egestas enim. Phasellus magna dolor, ornare et libero in, varius iaculis massa. Vivamus risus est, viverra id sollicitudin quis, tristique in velit. Ut feugiat libero vitae massa sodales, in laoreet ligula dapibus. Sed id lacus id ligula sagittis placerat id at lectus. Sed sed orci placerat, viverra velit in, adipiscing justo.</p>
        </div>
      </div>
    </div>
  </body>
</html>