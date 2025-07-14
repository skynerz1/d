<?php
include 'config.php';

$data = json_decode(file_get_contents('php://input'), true);

if (!$data) {
    http_response_code(400);
    echo json_encode(['error' => 'لا توجد بيانات']);
    exit;
}

$id = intval($data['id'] ?? 0);
$first_name = $conn->real_escape_string($data['first_name'] ?? '');
$username = $conn->real_escape_string($data['username'] ?? '');
$photo_url = $conn->real_escape_string($data['photo_url'] ?? '');

if ($id == 0) {
    http_response_code(400);
    echo json_encode(['error' => 'معرف المستخدم غير صالح']);
    exit;
}

// تحقق هل المستخدم موجود مسبقاً
$sql_check = "SELECT id FROM users WHERE id = $id";
$result = $conn->query($sql_check);

if ($result->num_rows > 0) {
    // حدث البيانات
    $sql_update = "UPDATE users SET first_name='$first_name', username='$username', photo_url='$photo_url' WHERE id=$id";
    $conn->query($sql_update);
} else {
    // أضف مستخدم جديد
    $sql_insert = "INSERT INTO users (id, first_name, username, photo_url) VALUES ($id, '$first_name', '$username', '$photo_url')";
    $conn->query($sql_insert);
}

echo json_encode(['success' => true]);
?>
