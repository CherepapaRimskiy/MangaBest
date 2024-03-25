<?php
    session_start();

    $title = "Панель администратора";
    require("header.php");

    function checkIfApplicationsExist() {
        $file = fopen("databases/applications.csv", "r");
        while (($data = fgetcsv($file, 1000, ",")) !== false) {
            if (isset($data[0])) {
                return true;
                break;
            }
        }
        return false;
    }
?>
<main>
    <?php
        if ((empty($_SESSION["login"])) || ($_SESSION["isAdmin"] == false)) {
            echo '<p class="error-message">У вас нет доступа к этой странице. Авторизуйтесь как администратор, чтобы продолжить.</p>';
        }
        else {
            echo '<p class="page-title">Панель администратора</p>';
            if (!checkIfApplicationsExist()) {
                echo '<p style="text-align: center; font-size: 24px; margin-bottom: 584px;">Не было подано ни одного заявления.</p>';
            }
            else {
                if (isset($_GET["success"])) {
                    echo '<p class="success-message">Изменения были успешно внесены в систему!</p>';
                }
                echo '
                    <form action="functional/change_statuses.php" method="post">
                    <table><tr><th>Номер заявления</th><th>Логин</th><th>ФИО</th><th>Номер авто</th><th>Описание</th><th>Статус</th></tr>';

                $file = fopen("databases/applications.csv", "r");

                while (($data = fgetcsv($file, 1000, ",")) !== false) {
                    $status = $data[5];
                    echo '<tr>
                            <td>' . $data[0] . '</td>
                            <td>' . $data[1] . '</td>
                            <td>' . $data[2] . '</td>
                            <td>' . $data[3] . '</td>
                            <td>' . $data[4] . '</td>
                            <td>
                            <select name="status[]">
                            <option value="В очереди"' . ($status == "В очереди" ? " selected" : "") . '>В очереди</option>
                            <option value="Обрабатывается"' . ($status == "Обрабатывается" ? " selected" : "") . '>Обрабатывается</option>
                            <option value="Подтверждено"' . ($status == "Подтверждено" ? " selected" : "") . '>Подтверждено</option>
                            <option value="Отклонено"' . ($status == "Отклонено" ? " selected" : "") . '>Отклонено</option>
                            </select>
                            </td>
                            </tr>';
                }
                echo '</table><div class="submit-container"><input type="submit" name="save_changes" value="Сохранить изменения"></div></form>';
            }
        }
    ?>
</main>
<?php
    require("footer.php");
?>