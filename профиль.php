<?php
require 'include/auth.php';

session_start(); // Начало сессии, чтобы получить информацию о пользователе и его роли
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Профиль</title>
    <link rel="stylesheet" href="css/prodile.css">
    <script src="js/profile.js" defer></script>
</head>
<body>
<article class="container">
    <div class="block">
        <section class="block_item block-item">
            <h2 class="block-item_tittle">У вас уже есть аккаунт?</h2>
            <button class="block-item__btn signin-btn">Войти</button>
        </section>
        <section class="block_item block-item">
            <h2 class="block-item_tittle">У вас нет аккаунта?</h2>
            <button class="block-item__btn signup-btn">Зарегестрироваться</button>
        </section>
    </div>

    <div class="form-box">
        <?php
            if($_COOKIE['user']==''):
        ?>
        <form action="include/auth.php" method="post" class="form form_signin">
            <h3 class="form_tittle">Вход</h3>
            <p>
                <input type="text" class="form_input" placeholder="Логин" name="login" id="login">
            </p>
            <p>
                <input type="password" class="password" placeholder="Пароль" name="password" id="password">
            </p>
            <p>
                <button class="form_btn" type="submit">Войти</button>
            </p>
        </form>

        <form action="include/register.php" method="post" class="form form_signup">
            <h3 class="form_tittle">Регистрация</h3>

            <p>
                <input type="text" class="form_input" placeholder="Логин" name="login" id="login">
            </p>
            <p>
                <input type="email" class="form_input" placeholder="Email" name="email" id="email">
            </p>
            <p>
                <input type="password" class="password" placeholder="Пароль" name="password" id="password">
            </p>
            <p>
                <button class="form_btn form_btn_signup" type="submit">Зарегестрироваться</button>
            </p>
        </form>
        <?php else: ?>
            <p>Привет, <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="/сайт.php">здесь</a>.</p>
        <?php endif; ?>
    </div>
</article>
</body>
</html>