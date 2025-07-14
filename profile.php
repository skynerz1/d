<?php
session_start();
if (!isset($_SESSION['id'])) {
    echo "لم يتم العثور على بيانات مستخدم.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ملف المستخدم</title>
</head>
<body>
    <h2>مرحباً، <?php echo $_SESSION['first_name']; ?> 👋</h2>
    <p>اسم المستخدم: @<?php echo $_SESSION['username']; ?></p>
    <img src="<?php echo $_SESSION['photo_url']; ?>" width="150" style="border-radius: 50%;">
</body>
</html>
