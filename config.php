<?php
// config.php
$servername = "mysql.railway.internal";
$username = "root";
$password = "fpTNIKtugqzuWYQxfcmLfXxpIoAKyORs";
$dbname = "railway";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}
?>
