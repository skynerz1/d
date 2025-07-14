<?php
session_start();
$data = json_decode(file_get_contents('php://input'), true);

if ($data) {
    $_SESSION['id'] = $data['id'] ?? '';
    $_SESSION['first_name'] = $data['first_name'] ?? '';
    $_SESSION['username'] = $data['username'] ?? '';
    $_SESSION['photo_url'] = $data['photo_url'] ?? '';
    echo "تم حفظ البيانات";
} else {
    echo "لم تصل بيانات";
}
