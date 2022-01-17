<!DOCTYPE HTML>
<html>
<head rang="ja">
    <meta charset="utf-8" />
    <title>
        <?php
        echo $_POST["form-name"];
        ?>
    </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <p>
        ランキング名
    </p>
    <p>
        <?php
        echo $_POST["form-name"];
        ?>
    </p>
    <p>
        ランキングの説明
    </p>
    <p>
        <?php
        echo $_POST["form-expla"];
        ?>
    </p>
</body>
</html>