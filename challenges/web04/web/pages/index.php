<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dream Job</title>
</head>

<body>
    <?php
        define('TMPLDIR', './tmpl/');
        $tmpl = filter_input(INPUT_GET, 'year');
    ?>
    <p>日本FP協会の発表している "小学生の「将来なりたい職業」ランキングトップ10" について紹介するサイトです。</p>
    <form action="/" method="GET">
    <p>年度選択<br>
    <select name="year">
    <option value="2018-man.html">2018年度 男子</option>
    <option value="2018-woman.html">2018年度 女子</option>
    <option value="2017-man.html">2017年度 男子</option>
    <option value="2017-woman.html">2017年度 女子</option>
    </select></p>
    <input type="submit" value="決定">
    </form>
    <br>
    <?php readfile(TMPLDIR . $tmpl); ?>
</body>
</html>