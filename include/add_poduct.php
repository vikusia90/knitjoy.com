<?php
// Параметры подключения к базе данных
$servername = "localhost";
$username = "knitjoy";
$password = "knitjoy";
$dbname = "knitjoy";

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Получение данных из формы
$tittle = $_POST['tittle'];
$price = $_POST['price'];
$imade = $_POST['imade'];

// SQL запрос для добавления товара
$sql = "INSERT INTO `catalog` (`tittle`, `price`, `imade`) VALUES ('$tittle', '$price', '$imade')";

if ($conn->query($sql) === TRUE) {
    echo "Товар успешно добавлен в базу данных";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

// Закрытие соединения с базой данных
$conn->close();
?>