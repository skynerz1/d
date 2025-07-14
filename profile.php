<?php
session_start();
include 'config.php';

// مثال بسيط: جلب id من الجلسة أو GET
$user_id = $_SESSION['id'] ?? ($_GET['id'] ?? 0);

if ($user_id == 0) {
    echo "لم يتم العثور على بيانات مستخدم.";
    exit;
}

$sql = "SELECT * FROM users WHERE id = $user_id LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
    echo "المستخدم غير موجود.";
    exit;
}

$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>ملف المستخدم</title>
    <style>
        body {
            font-family: Tahoma, sans-serif;
            text-align: center;
            margin-top: 50px;
            background-color: #f2f2f2;
        }
        img {
            border-radius: 50%;
            border: 2px solid #888;
        }
        .info {
            font-size: 18px;
            margin-top: 10px;
        }
        .back {
            margin-top: 30px;
            display: inline-block;
            padding: 10px 20px;
            background-color: #2fa4e7;
            color: white;
            border-radius: 8px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h2>مرحباً، <?php echo htmlspecialchars($user['first_name']); ?> 👋</h2>
    <p class="info">اسم المستخدم: @<?php echo htmlspecialchars($user['username']); ?></p>
    <img src="<?php echo htmlspecialchars($user['photo_url']); ?>" width="150" alt="الصورة">
    <br>
    <a class="back" href="https://t.me/اسم_البوت_هنا">رجوع إلى البوت</a>
</body>
</html>
