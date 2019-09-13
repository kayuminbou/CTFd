<?php
if (!isset($_COOKIE["web03_session"])) {
    setcookie("web03_session", "0000000000000000", time()+3600);
    setcookie("admin", "0", time()+3600);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Comment</title>
    </head>

    <body>
        <?php
            $json_file="a140872db281f3a2dda3f683cd2b76ef.json";
            $msg = "";
            $json = file_get_contents($json_file);
            $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
            $arr = json_decode($json,true);
            
            if ($_COOKIE["admin"]=="1"){
                $msg = getenv('FLAG');
            }
        ?>
        <h2>Comment List</h2>
        <?php 
        foreach ($arr as &$value) {
            print '<p>'.$value['time'].' : '.$value['text'].'<p>';
        }
        unset($value);
        ?>
        <br/>


        <h2>Post Comment</h2>
        <form action="/" method="post">
            <input type="text" name="text"><br/>
            <input type="submit" value="post"><br/>
        </form>

        <?php
            if (isset($_POST['text']) && $_POST['text'] != '') {
                $text = $_POST['text'];
                $arr[] = [
                    'time' => date("Y/m/d H:i:s"),
                    'text' => $text,
                ];
                $en_json = json_encode($arr);
                file_put_contents($json_file, $en_json, LOCK_EX);
                $msg = "send!";
            }
        ?>
        <p>msg: <?php print $msg ?> </p> <br>

        Bot is patrolling.
    </body>
</html>