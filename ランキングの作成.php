<!DOCTYPE html>
<html>
<head lang="ja">
    <meta charset="utf-8" />
    <title>
        ランキング作成
    </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <h1 class="blue">ランキング作成</h1>
    <form action="stock.php" method="post">
        <ul>
            <li><label>ランキング名<span class="rankingname"><input type="text" name="form-name" required/></span></label></li>
            <li><label>説明<br /><textarea name="form-expla" rows="4" required></textarea></label></li>
            <li>ランキングの設置場所</li>
        </ul>
        <label><input type="radio" name="R18" checked />通常コーナー</label>
        <label><input type="radio" name="R18" />R-18コーナー</label>
        <input type="submit" value="作成"/>
    </form>
</body>
</html>