<?php
session_start();
$userEmail = 'antonsyniuk2008@gmail.com';

$userPassword = hash('sha256', '123'); 


if (isset($_POST['email']) && 
    isset($_POST['password']) && 
    $_POST['email'] === $userEmail && 
    hash('sha256', $_POST['password']) === $userPassword) {
    $_SESSION['is_logged'] = true;
    $_SESSION['uid'] = 99; 
    $expireDate = time() + 20; 
    setcookie('user_time', time(), $expireDate, '/');
    header('Location: cabinet.php');
    // Після header('Location: ...')
    exit;

} else {
    $errorMessage = "Невірно введений email або пароль!";
}
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Помилка входу</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    include 'navigation.php'; 
    ?>
    
    <h1>Помилка авторизації</h1>
    <p class="error"><?= htmlspecialchars($errorMessage) ?></p>
    <p>
        <a href="index.php">Повернутися на головну сторінку</a>
    </p>

</body>
</html>