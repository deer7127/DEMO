<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_input = $_POST['captcha_input'];

    if (isset($_SESSION['captcha']) && $user_input === $_SESSION['captcha']) {
        echo "驗證成功！";
    } else {
        echo "驗證失敗，請再試一次。";
    }

    // 清除 session 中的 CAPTCHA
    unset($_SESSION['captcha']);
} else {
    echo "無效的請求方法。";
}
?>
