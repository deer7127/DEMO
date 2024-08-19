<?php
$servername = "localhost";
$username = "admin";
$password = "12345";
$dbname = "my_test_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("連接失敗: " . $conn->connect_error);
}

$sql = "SELECT id, title FROM editor_content ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<li><a href='#' onclick='viewContent(" . $row['id'] . ")'>" . htmlspecialchars($row['title']) . "</a></li>";
    }
} else {
    echo "沒有存檔記錄";
}

$conn->close();
?>
