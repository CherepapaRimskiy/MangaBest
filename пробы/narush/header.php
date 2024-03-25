<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@600&family=Inter&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/Group 22.png">
</head>
<body>
    <header>
        <div class="header-flex">
            <div class="title"><a href="index.php" id="title-link"><span class="red">Нарушениям</span> .нет</a></div>
            <?php
                if (empty($_SESSION['login'])) {
                    echo '<div class="sign-in"><a href="auth.php" class="link">Войти</a></div>';
                }
                else {
                    echo '<div class="auth-info">Здравствуйте, ' . $_SESSION["login"] . '!</div>';
                }
            ?>
        </div>
    </header>
    <?php
        if (!empty($_SESSION["login"])) {
            echo '
            <div class="user-panel">
                <div class="make-an-application"><a href="apply-form.php" class="user-panel-link">Подать заявление</a></div>
                <div class="my-applications"><a href="my-applications.php" class="user-panel-link">Мои заявления</a></div>';
            if ($_SESSION["isAdmin"] == true) {
                echo '<div class="admin-panel"><a href="admin.php" class="user-panel-link">Панель админа</a></div>';
            }
                echo '<div class="sign-in"><a href="functional/logout.php" class="user-panel-link">Выйти</a></div>
            </div>';
        }
    ?>