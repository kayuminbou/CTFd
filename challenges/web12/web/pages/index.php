<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>XSS Challenge</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


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
    <!-- Custom styles for this template -->
    <link href="css/navbar-top.css" rel="stylesheet">
  </head>
  <body>

    <script>
      window.addEventListener("load", function(){
          var q = location.hash.substring(1);
          window.query.innerHTML = (q == '' ? 'こんにちは!' : (decodeURI(q) + 'さん, こんにちは!'));
      });
    </script>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <a class="navbar-brand" href="/">XSS Challenge</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="message.php">Message</a>
      </li>
    </ul>
  </div>
</nav>

<main role="main" class="container">
  <div class="jumbotron">
    <h1>Welcome to XSS Challenge!</h1>
    <p class="lead" id="query"></p><br/>
    <h2>src</h2>
    <p class="lead"><code>
      <?php show_source(__FILE__); ?>
    </code></p>
  </div>
</main>
</html>
