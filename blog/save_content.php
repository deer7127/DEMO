<?php
// 連接到資料庫
$servername = "localhost";
$username = "admin";
$password = "12345";
$dbname = "my_test_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("連接失敗: " . $conn->connect_error);
}

$title = $conn->real_escape_string($_POST['title']);
$content = $conn->real_escape_string($_POST['content']);

$sql = "INSERT INTO editor_content (title, content) VALUES ('$title', '$content')";

if ($conn->query($sql) === TRUE) {
    echo "新記錄創建成功";
} else {
    echo "錯誤: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
