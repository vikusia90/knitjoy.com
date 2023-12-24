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
$title = $_POST['title'];
$text = $_POST['text'];

// SQL запрос для добавления товара
$sql = "INSERT INTO `aducation` (`title`, `text`) VALUES ('$title', '$text')";

if ($conn->query($sql) === TRUE) {
    echo "Материал успешно добавлен в базу данных";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

// Закрытие соединения с базой данных
$conn->close();
?>