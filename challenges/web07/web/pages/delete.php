<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Image Uploader</title>
    </head>
    <body>
           
    <?php
    
    $dir = "./upload/" ;
    if (isset($_POST['image']) || $_POST['image'] != ''){
        $image = $_POST["image"];
        if( is_dir( $dir ) && $handle = opendir( $dir ) ) {
            while( ($file = readdir($handle)) !== false ) {
                if( filetype( $path = $dir . $file ) == "file" && $image == $file) {
                    if(unlink($path)){
                        print '削除しました。<br/>';
                        print '<input type="button" onclick="history.back()" value="戻る">';
                    }
                    else{
                        print '何らかの原因により削除できませんでした。管理者までお問い合わせください。<br/>';
                        print '<input type="button" onclick="history.back()" value="戻る">';
                    }
                // $file: ファイル名
                // $path: ファイルのパス
                }
            }
        }
    }else{
        print '画像を選択してください。<br/>';
        print '<input type="button" onclick="history.back()" value="戻る">';
    }
        
    ?>
    </body>
</html>