<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['id'] = $_POST['id'] ?? '';
    $_SESSION['first_name'] = $_POST['first_name'] ?? '';
    $_SESSION['username'] = $_POST['username'] ?? '';
    $_SESSION['photo_url'] = $_POST['photo_url'] ?? '';
    echo 'تم الحفظ';
} else {
    echo 'طلب غير صالح';
}
