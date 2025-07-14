<?php
// create_table.php
include 'config.php';

$sql = "CREATE TABLE IF NOT EXISTS users (
    id BIGINT PRIMARY KEY,
    first_name VARCHAR(100),
    username VARCHAR(100),
    photo_url TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "تم إنشاء الجدول بنجاح";
} else {
    echo "خطأ في إنشاء الجدول: " . $conn->error;
}
?>
