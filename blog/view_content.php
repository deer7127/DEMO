<?php
$servername = "localhost";
$username = "admin";
$password = "12345";
$dbname = "my_test_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("連接失敗: " . $conn->connect_error);
}

$id = intval($_GET['id']);

$sql = "SELECT content FROM editor_content WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row['content'];  // 直接輸出 HTML 內容
    }
} else {
    echo "無法找到該記錄";
}

$conn->close();
?>