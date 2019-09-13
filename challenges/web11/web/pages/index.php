<?php
session_start();
session_regenerate_id(true);
$_SESSION['admin']=0;
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
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
  <form class="form-signin" method="POST" action="check.php">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="inputUserID" class="sr-only">User ID</label>
  <input type="userid" name="userid" id="inputUserID" class="form-control" placeholder="User ID" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <button name="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <a class="btn btn-lg btn-link btn-block" href="member.php">Not Member</a>
</form>
</body>
</html>
