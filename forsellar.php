<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Добавить товар</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: #E9E7E8; margin-top: 200px; margin-left: 450px; ">
    <h2 style="color: #663500; font-size: 40px; font-family: 'Noto Sans', sans-serif;">Добавить новый товар</h2>
    <form action="include/add_poduct.php" method="post">
        <div class="form-group">
            <label style="color: #663500; font-size: 20px; font-family: 'Noto Sans', sans-serif;"for="tittle">Название товара:</label>
            <input type="text" id="tittle" name="tittle">
        </div>
        <div class="form-group">
            <label style="color: #663500; font-size: 20px; font-family: 'Noto Sans', sans-serif;"for="price">Цена:</label>
            <input type="text" id="price" name="price">
        </div>
        <div class="form-group">
            <label style="color: #663500; font-size: 20px; font-family: 'Noto Sans', sans-serif;"for="imade">Изображение (URL):</label>
            <input type="text" id="imade" name="imade">
        </div>
        <button style="color: #663500; font-size: 30px; font-family: 'Noto Sans', sans-serif; margin-left: 50px; border: none;
    cursor: pointer;
    font-size: inherit;
    background-color: #b3a79b;
    color: white;
    padding: 10px 50px;"type="submit";>Добавить товар</button>
    </form>
</body>
</html>