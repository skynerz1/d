<?php
session_start();

$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['id'])) {
    $_SESSION['id'] = $data['id'];
    $_SESSION['first_name'] = $data['first_name'] ?? '';
    $_SESSION['username'] = $data['username'] ?? '';
    $_SESSION['photo_url'] = $data['photo_url'] ?? '';
    echo "saved";
} else {
    echo "invalid";
}
