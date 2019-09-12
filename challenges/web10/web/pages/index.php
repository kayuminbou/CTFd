<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SOS Command</title>
</head>

<body>
    <p>SOS! If you can help me, I will tell you where the FLAG is.</p>
    <form action="/" method="GET">
    <p>Hint<br>
    <select name="hint">
    <option value="hint1">hint1</option>
    <option value="hint2">hint2</option>
    <option value="hint3">hint3</option>
    </select></p>
    <input type="submit" value="OK">
    </form>
    <br>
    <?php
        if (isset($_GET['hint']) && $_GET['hint'] != ''){
            $hint = filter_input(INPUT_GET, 'hint');
            system("cat $hint");
        }
    ?>
</body>
</html>