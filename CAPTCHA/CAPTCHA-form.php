<?php session_start(); ?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>CAPTCHA 驗證</title>
</head>
<body>

<form action="verify_captcha.php" method="post">
    <p>請輸入下方圖片中的文字：</p>
    <img src="captcha.php" alt="CAPTCHA">
    <input type="text" name="captcha_input">
    <button type="submit">驗證</button>
</form>

</body>
</html>
