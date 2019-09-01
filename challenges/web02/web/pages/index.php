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
                $dsn='mysql:dbname=sample_db;host=web02-db;charset=utf8';
                $user='user';
                $password='password';
                $dbh=new PDO($dsn, $user, $password);
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql="SELECT * FROM users WHERE name='".$name."' AND password=?";
                $stmt=$dbh->prepare($sql);
                $data[]=$pass;
                $stmt->execute($data);
                $rec=$stmt->fetch(PDO::FETCH_ASSOC);
                $dbh=null;

                if($rec["name"] != ""){
                    print 'Login Suceeded! But,Flag is not here.</br>
                        Hint: the flag is user\'s name.</br>
                        $sql="SELECT * FROM users WHERE name=\'".$name."\' AND password=?"';
                }
                else{
                    print 'Login failed.';
                }
            }
        ?>
    </body>
</html>
