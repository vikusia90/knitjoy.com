<?php
// Подключение к базе данных
$host = 'localhost';
$username = 'knitjoy';
$password = 'knitjoy';
$dbname = 'knitjoy';

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Ошибка подключения: " . $conn->connect_error);
}

// Регистрация пользователя
if(isset($_POST['email'])){
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password =md5($_POST['password']);
    $role = "User"; // Роль по умолчанию

    $query = "INSERT INTO `users` (`login`, `email`, `password`, `role`) VALUES ('$login', '$email', '$password', '$role')";

    if ($conn->query($query) === TRUE) {
        echo "Пользователь зарегистрирован успешно";
    } else {
        echo "Ошибка регистрации пользователя: " . $conn->error;
    }
}
$conn->close();
?>