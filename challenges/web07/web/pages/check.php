<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Image Uploader</title>
    </head>
    <body>
           
    <?php
    if (isset($_FILES['image'])){
        $image = $_FILES["image"];
        if($image['size']>0)
                {
                        if($image['size']>1000000)
                        {
                            print '画像が大きすぎます。一度戻ってやり直してください。<br/>';
                            print '<input type="button" onclick="history.back()" value="戻る">';
                        }
                        else
                        {
                            move_uploaded_file($image['tmp_name'],'./upload/'.$image['name']);
                            print '<img src="./upload/'.$image['name'].'">';
                            print '<br/>アップロードが完了しました！<br/>';
                            print '<input type="button" onclick="history.back()" value="戻る">';
                        }
                }
    }else{
        print '画像を選択してください。<br/>';
        print '<input type="button" onclick="history.back()" value="戻る">';
    }
    ?>
    </body>
</html>