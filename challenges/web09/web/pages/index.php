<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ログイン画面</title>
    </head>
    <body>
        <form method="POST" action="index.php">
            ログイン画面<br/>
            ユーザ名
            <input type="text" name="name" style="width:150px"><br/>
            パスワード
            <input type="password" name="password" style="width:150px"><br/>
            <input type="submit" value="ログイン"><br/><br/>
        </form>
        <?php
            $name=$_POST["name"];
            $pass=$_POST["password"];

            if ($name == ""){
                exit();
            }
            else{
                $dsn='mysql:dbname=sample_db;host=web09-db;charset=utf8';
                $user='user';
                $password='password';
                $dbh=new PDO($dsn, $user, $password);
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql="SELECT * FROM users WHERE name='".$name."' AND password='".$pass."'";
                $stmt=$dbh->prepare($sql);
                $stmt->execute();
                $rec=$stmt->fetch(PDO::FETCH_ASSOC);
                $dbh=null;

                if($rec["name"] != ""){
                    print '<h2>Login Suceeded!<h2>
                        Flag : ctfgate{5up3r_7yp1c4l_5ql_1nj3c710n}';
                }
                else{
                    print '<h2>Login Failed.<h2>';
                }
            }
        ?>
    </body>
</html>
