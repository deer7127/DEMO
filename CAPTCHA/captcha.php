<?php
session_start();

// 設定 CAPTCHA 的文字長度
$captcha_length = 6;

// 生成隨機的 CAPTCHA 文字
$captcha_text = '';
for ($i = 0; $i < $captcha_length; $i++) {
    $captcha_text .= chr(rand(65, 90)); // 生成隨機大寫字母
}

// 將 CAPTCHA 文字儲存到 session 中
$_SESSION['captcha'] = $captcha_text;

// 創建圖片
$image = imagecreate(120, 40);

// 設定背景顏色和文字顏色
$background_color = imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 0);

// 設定字體路徑（假設使用 TTF 字體）
// $font = './path_to_your_font.ttf'; // 替換為實際的字體路徑

// 將文字繪製到圖片上
imagettftext($image, 20, 0, 10, 30, $text_color, $font, $captcha_text);

// 設置圖片標頭
header('Content-type: image/png');

// 輸出圖片
imagepng($image);

// 釋放圖片記憶體
imagedestroy($image);
?>
