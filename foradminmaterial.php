
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Добавить материал</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: #E9E7E8; margin-top: 200px; margin-left: 450px; ">
    <h2 style="color: #663500; font-size: 40px; font-family: 'Noto Sans', sans-serif;">Добавить материал</h2>
    <form action="include/add_material.php" method="post">
        <div class="form-group">
            <label style="color: #663500; font-size: 20px; font-family: 'Noto Sans', sans-serif;"for="tittle">Титульник:</label>
            <input type="text" id="title" name="title">
        </div>
        <div class="form-group">
            <label style="color: #663500; font-size: 20px; font-family: 'Noto Sans', sans-serif;"for="price">Текст:</label>
            <input type="text" id="text" name="text">
        </div>
        <button style="color: #663500; font-size: 30px; font-family: 'Noto Sans', sans-serif; margin-left: 50px; border: none;
    cursor: pointer;
    background-color: #b3a79b;
    color: white;
    padding: 10px 50px;" type="submit">Добавить материал</button>
    </form>
</body>
</html>