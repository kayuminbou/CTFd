<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>What is RFI?</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/navbar-bottom/">

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>
    <?php
        if ($_GET["page"]) {
        $file = $_GET["page"].".php";
        // simulate null byte issue
        $file = preg_replace('/\x00.*/',"",$file);
            include($file);
        }
        else{
            echo '
                <div class="container">
              <div class="jumbotron mt-3">
                <h1>Request for Information</h1>
                <p class="lead">A request for information (RFI) is an incredibly useful document.</p>
              </div>
            </div>
            <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">
              <a class="navbar-brand" href="#">What is RFI?</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/?page=about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/?page=diff">Differences</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/?page=howto">How to</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="/?page=info">Info</a>
                  </li>
                </ul>
              </div>
            </nav>
            ';
        }
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>