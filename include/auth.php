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

// Авторизация пользователя
if(isset($_POST['login'])){
    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM `users` WHERE `login`='$login'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        //Возвращает ассоциативный массив, соответствующий полученному ряду и сдвигает вперёд внутренний указатель результата
        $row = $result->fetch_assoc();
        if (!empty($password)) {
            session_start();
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['expire'] = time() + 3600; // Устанавливаем время жизни сессии на 1 час
            echo "Добро пожаловать, " . $_SESSION['role'] . " на сайт KnitJoy!";
            header('Location: /сайт.php');
        } else {
            echo "Неправильный логин или пароль";
        }
    } else {
        echo "Пользователь не найден";
    }
}
// Закрытие соединения с базой данных
$conn->close();
?>