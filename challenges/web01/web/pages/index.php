<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>社員名簿</title>
    </head>
    <body>
        <form method="GET" action="index.php">
            検索フォーム<br/>
            <input type="text" name="name" style="width:150px">
            <input type="submit" value="検索"><br/><br/>
        </form>
        <?php
            $name=$_GET["name"];
            $dsn='mysql:dbname=sample_db;host=web01-db;charset=utf8';
            $user='user';
            $password='password';
            $dbh=new PDO($dsn, $user, $password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if ($name == ""){
                $sql='SELECT name,comment FROM users';
            }
            else{
                $sql='SELECT name,comment FROM users WHERE name LIKE "%'.$name.'%"';
            }
            
            $stmt=$dbh->prepare($sql);
            $stmt->execute();
            $dbh=null;
            
            print '職員一覧<br />';
            print '<table border="1">';
            print '<tr>';
            print '<th>名前</th>';
            print '<th>評価</th>';
            print '</tr>';
            
            while(true)
            {
                $rec=$stmt->fetch(PDO::FETCH_ASSOC);
                if($rec==false)
                {
                    break;
                }
                print '<tr>';
                print '<td>'.$rec['name'].'</td>';
                print '<td>'.$rec['comment'].'</td>';
                print '</tr>';
            }
            print '</table>';
        ?>
    </body>
</html>
