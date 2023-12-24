<?php
require 'include/db.php';

session_start(); // Начало сессии, чтобы получить информацию о пользователе и его роли
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Каталог</title>
    <link rel="stylesheet" href="css/katalog.css">
</head>
<body style="background-color: #E9E7E8;">
<div class="header">
    <h2>Каталог</h2>
    <h4>Вы можете купить как схемы вязания, так и уже готовые изделия</h4>
</div>

<div class="for-seller">
<?php
if (isset($_SESSION['role']) && ($_SESSION['role'] == 'Seller' || $_SESSION['role'] == 'Admin')) {
    echo '<h4><a href="forsellar.html">Добавить товар</a></h4>';
}
?>
</div>

<div class="container">
    <div class="row">
        <?php
                $products = get_products_all();
                foreach ($products as $product) {?>

                    <div class="col-md-3">
                        <div class="product">
                            <div class="image">
                                <img style="width: 300px; height: 350px" src="<?php echo $product["imade"]; ?>" alt="">
                            </div>
                            <div class="info">
                                <h3><?php echo $product["tittle"]; ?></h3>
                                <div class="info-price">
                                    <span class="price"><?php echo $product["price"]; ?><small>₽</small></span>
                                    <button id="openModalBtn">Оформить заказ</button>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>
    </div>
</div>
<div class="modal" id="modal">
    <div class="modal-content">
    <span class="close">&times;</span> <!-- Кнопка закрытия модального окна -->
    <h2>Оформление заказа</h2>
    <!-- Форма для оформления заказа -->
    <form id="orderForm">
      <!-- поля для ввода информации о заказе -->
      <label for="name">Имя:</label>
      <input type="text" id="name" name="name">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email">
      <button type="submit">Отправить заказ</button>
    </form>
  </div>
</div>

<script type="js/modalkatalog.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>