<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Image Uploader</title>
    </head>
    <body>
        
        <h1>画像アップロード</h1>
        <br />
        <form method="POST" action="check.php" enctype="multipart/form-data">
            画像を選んでください。<br/>
            <input type="file" name="image" style="width:400px"><br/>
            <input type="submit" value=" OK ">
        </form>
        <!-- flag is here -> /secret-4f6c9681c8c1fb500af461882c88b613 -->
        <br/><br/>
        <h2>投稿された画像の一覧</h2>
        <form method="POST" action="delete.php">
        <table border="1">
        <tr>
        <td>ファイル名</td>
        <td>画像</td>
        <td>削除</td>
        </tr>
        <?php

            $dir = "./upload/" ;

            if( is_dir( $dir ) && $handle = opendir( $dir ) ) {
                while( ($file = readdir($handle)) !== false ) {
                    if( filetype( $path = $dir . $file ) == "file" ) {
                        print '<tr>';
                        print '<td>'.$file.'</td>';
                        print '<td><img src="./upload/'.$file.'"></td>';
                        print '<td><input type="radio" name="image" value="'.$file.'"></td>';
                        print '</tr>';
                    // $file: ファイル名
                    // $path: ファイルのパス
                    }
                }
            }
        ?>
        </table><br/>
        <input type="submit" value="削除"><br/>
        </form>
    </body>
</html>