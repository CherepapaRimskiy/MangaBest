<?php
    session_start();
    $title = 'Авторизация';
    require('header.php');
?>
<main>
    <p class="page-title">Вход</p>
    <?php
        if (isset($_GET["error"])) {
            echo '<p class="error-message">Вы ввели неправильный логин и/или пароль.</p>';
        }
    ?>
    <form action="functional/login.php" method="post">
        <div class="data-input">
            <input type="text" placeholder="Логин" name="login" required>
            <input type="password" placeholder="Пароль" name="password" required>
        </div>
        <div class="submit-container" id="log">
            <input type="submit" value="Войти">
        </div>
    </form>
    <div class="submit-container">
        <input type="submit" value="Регистрация" onclick="window.document.location = 'reg.php'" id="reg">
    </div>
</main>
<?php
    require('footer.php');
?>