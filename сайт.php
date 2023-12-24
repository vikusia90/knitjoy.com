<?php
require 'include/db.php';

session_start(); // Начало сессии, чтобы получить информацию о пользователе и его роли
?>
<!DOCTYPE html>
<html lang="en" class = "no-js">
<head>
    <meta charset="UTF-8">
    <!-- атрибут, который объявляет кодировку символов документа.
    если его не прописать, то определенные символы на старнице могут отображаться
    некорректно-->
    <meta name="viewport" content = "width=device-width">
    <!-- автоматическое расширение сайта -->
    <title>KnitJoy</title>
    <!-- оценивает, может ли браузер работать с JavaScript
    если нет, то оставляет класс "no-js"
    если да, то удаляет класс "no-js" и ставит "js" -->
    <script type="module">
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>
    <!-- подключаем документы, которые будут использоваться -->
    <link rel="stylesheet" href="css/style.css">
    <meta name="description" content="Помощник-руководитель для изготовления и приобретения вязанных изделий.">
    <meta property="og:title" content="KnitJoy">
    <meta property="og:title" content="Главная старница">
    <meta property="og:locale" content="en_GB">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.knitjoy.com/page">
    <meta name="theme-color" content="#E9E7E8">
    <!--картинка-эмблемка в заголовке вкладки слева
    <link rel="icon" href="/favicon.ico">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="manifest" href="/my.webmanifest">
    -->
    <link rel="canonical" href="https://www.knitjoy.com/page">
</head>
<body style="background-color: #E9E7E8;">
<header class="header">
    <div class="header__logo">
        <h1>
            <img src="images/KnitJoy.png" alt="">
        </h1>
        <a href="include/exit.php"><img src="images/выход.png"></a>
    </div>
    <div class="linegorizont">
        <img style="position:absolute; width: 960px; top: 30px; height: 1px"  src="images/linegor.png" alt="" >
    </div>
    <div class="linevertikalno">
        <img style="position: absolute; left: 30px; top: 0; height: 596px; width: 1px" src="images/linever.png" alt="">
    </div>
</header>
<div class="intro">
    <div class="logo_puka">
        <img style="width: 450px; height: 450px" src="images/рука.png" alt="">
    </div>
    <div class="container">
        <div class="katalog">
            <a href="каталог.php">
                <img style="width: 200px; height: 200px" src="images/backgraundcatalog.png" alt="">
                <img style="position: absolute; top: 90px; left: 18px; width: 85%" src="images/КАТАЛОГ.png" alt="">
            </a>
        </div>
    </div>
    <div class="container1">
        <div class="ychebnoe_posobie">
            <a href="учебное_пособие.php">
                <img style="width: 200px; height: 200px " src="images/backgraundychposobie.png" alt="">
                <img style="position: absolute; top: 65px; left: 16px; width: 85%" src="images/УЧЕБНОЕ%20ПОСОБИЕ.png" alt="">
            </a>
        </div>
    </div>
    <div class="podpiska">
        <a href="профиль.php">
            <img style="width: 200px; height: 200px " src="images/backgraundpodpiska.png" alt="">
            <img style="position: absolute; top: 90px; left: 20px; width: 80%" src="images/профиль1.png" alt="">
        </a>
    </div>
    <div class="kontakti">
        <a href="#cont">
            <img style="width: 200px; height: 200px " src="images/backgraundcontakti.png" alt="">
            <img style="position: absolute; top: 90px; left: 19px; width: 80%" src="images/КОНТАКТЫ.png" alt="">
        </a>
    </div>
    <div class="podbal">
        <a name="cont"></a>
        <p style="color: white">+7 989 502 14 26</p>
        <p style="color: white">knitjoy@mail.ru</p>
    </div>
</div>
</body>
</html>