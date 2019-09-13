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
      <li class="nav-item active">
        <a class="nav-link" href="message.php">Message</a>
      </li>
    </ul>
  </div>
</nav>

<main role="main" class="container">
  <div class="jumbotron">
    <h1>Welcome to XSS Challenge!</h1>

    <p class="lead">You can send a message to crawler this form!</p>

    <form method="POST" action="message.php" class="form-inline">
        <div class="form-group mx-sm-3 mb-2">
            <label for="inputMessage" class="sr-only">Message</label>
            <input type="text" name="text" class="form-control" id="inputMessage" placeholder="Message">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form><br/>
    <h2>Message List</h2>
    <?php
        $json_file="360cc615784d8b7fd34024420f38b6e0.json";
        $json = file_get_contents($json_file);
        $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
        $arr = json_decode($json,true);

        if (isset($_POST['text']) && $_POST['text'] != '') {
            $text = $_POST['text'];
            $arr[] = [
                'time' => date("Y/m/d H:i:s"),
                'text' => $text,
            ];
            $en_json = json_encode($arr);
            file_put_contents($json_file, $en_json, LOCK_EX);
        }

        foreach ($arr as &$value) {
            print '<p class="lead">'.$value['time'].' : '.$value['text'].'<p>';
        }
        unset($value);
    ?>
    </p>
  </div>
</main>
</html>
