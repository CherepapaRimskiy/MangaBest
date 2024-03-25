<?php
    session_start();

    $title="Отправка заявления";
    require("header.php");
?>
<main>
    <?php
        if (empty($_SESSION["login"])) {
            echo '<p class="error-message">У вас нет доступа к этой странице. Авторизуйтесь, чтобы продолжить.</p>';
        }
        else {
            echo '
                <p class="page-title">Форма отправки</p>';
            if (isset($_GET["success"])) {
                echo '<p class="success-message">Заявление было успешно отправлено!</p>';
            }
            echo '
                <form action="functional/apply.php" method="post">
                    <div class="data-input">
                        <input type="text" placeholder="ФИО" name="full-name" required>
                        <input type="text" placeholder="Номер авто" name="car-number" required>
                        <textarea placeholder="Описание" name="description" required></textarea>
                    </div>
                    <div class="submit-container">
                        <input type="submit" value="Отправить форму">
                    </div>
                </form>';
        }
    ?>
</main>
<?php
    require("footer.php");
?>