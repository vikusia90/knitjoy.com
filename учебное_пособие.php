<?php
require 'include/db.php';

session_start(); // Начало сессии, чтобы получить информацию о пользователе и его роли
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Учебное пособие по вязанию</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .content {
            margin-top: 30px;
        }

        .section {
            margin-bottom: 40px;
        }

        .section-title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .section-desc {
            font-size: 16px;
            color: #666;
        }

        .steps {
            margin-top: 20px;
        }

        .step {
            margin-bottom: 10px;
        }

        .step-title {
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }

        .step-desc {
            font-size: 16px;
            color: #666;
        }
    </style>
</head>
<body>
<h1>Учебное пособие по вязанию</h1>

<div class="for-admin">
<?php
if (isset($_SESSION['role']) && ($_SESSION['role'] == 'Admin')) {
    echo '<h4><a href="foradminmaterial.html">Добавить материалы</a></h4>';
}
?>

<div class="content">
    <?php
        $aducation = get_aducation_all();
        foreach ($aducation as $aducat) {?>
    <div class="section">
        <h2 class="section-title"><?php echo $aducat["title"]; ?></h2>
        <p class="section-desc"><?php echo $aducat["text"]; ?></p>
    </div>
       <?php } ?>
</div>
</body>
</html>