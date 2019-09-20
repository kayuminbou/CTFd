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
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <a class="navbar-brand" href="/">XSS Challenge</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/?source">Source</a>
      </li>
    </ul>
  </div>
</nav>

<main role="main" class="container">
  <div class="jumbotron">
    <h1>Welcome to My XSS Challenge!!</h1>
    <p class="lead">Can you get the crawler's cookie?<br>
    ↓↓The cralwer will CLICK the link you input.↓↓</p>
    <form method="POST" action="/" class="form-inline">
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputMessage" class="sr-only">Create Link</label>
            <input type="text" name="text" class="form-control" id="inputMessage" placeholder="Message">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Update</button>
    </form><br/>
    <h2>Your Link</h2>
    <?php
        $file=getenv('FILENAME');
        $link = file_get_contents($file);
        
        if (isset($_POST['text']) && $_POST['text']!='') {
          $link = htmlspecialchars($_POST['text'], ENT_QUOTES, "UTF-8");
          file_put_contents($file, $link, LOCK_EX);
        }
        print '<a id="xss" href="'.$link.'">'.$link.'</a>';

        if (isset($_GET['source'])) {
          print '<p class="lead"><code>';
          show_source(__FILE__);
          print '</code></p>';
          }
      ?>
  </div>
</main>
</html>
