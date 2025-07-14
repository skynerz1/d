<?php
session_start();
if (!isset($_SESSION['id'])) {
    echo "لم يتم العثور على بيانات مستخدم.";
    exit;
}
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
    <h2>مرحباً، <?php echo $_SESSION['first_name']; ?> 👋</h2>
    <p class="info">اسم المستخدم: @<?php echo $_SESSION['username']; ?></p>
    <img src="<?php echo $_SESSION['photo_url']; ?>" width="150" alt="الصورة">
    <br>
    <a class="back" href="https://t.me/اسم_البوت_هنا">رجوع إلى البوت</a>
</body>
</html>
