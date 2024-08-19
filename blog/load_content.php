<?php
// 連接到資料庫
$servername = "localhost";
$username = "admin";
$password = "12345";
$dbname = "my_test_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// 檢查連接
if ($conn->connect_error) {
    die("連接失敗: " . $conn->connect_error);
}

// 從資料庫取出最新的一筆內容
$sql = "SELECT content FROM editor_content ORDER BY created_at DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row['content'];
    }
} else {
    echo "沒有可顯示的內容";
}

$conn->close();
?>
