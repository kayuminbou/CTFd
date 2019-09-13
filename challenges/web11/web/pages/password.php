<?php
session_start();
session_regenerate_id(true);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>C Surfing</title>

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
  <a class="navbar-brand" href="#">C Surfing</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
      <a class="nav-link" href="member.php">Member's Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="password.php">Password Change</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="message.php">Message</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signout.php">Sign Out</a>
      </li>
    </ul>
  </div>
</nav>

<main role="main" class="container">
  <div class="jumbotron">
    <?php
        if(isset($_SESSION['admin'])==true && $_SESSION['admin']==1){
            print '
            <form class="form-signin" method="GET" action="change.php">
            <input type="password" name="password" class="form-control" placeholder="New password">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Change</button>
            </form>';
        }
        elseif(isset($_SESSION['admin'])==false || $_SESSION['admin']==0){
            print '<h1>Sorry, You are not a C Surfing member.</h1>
            <p class="lead">↓↓"password.php" source code is here ↓↓</p>
            <p class="lead"><code>';
            show_source(__FILE__);
            print '</code></p>';
        }
    ?>
  </div>
</main>
</html>
