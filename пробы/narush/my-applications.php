<?php
    session_start();

    $title = "Мои заявления";
    require("header.php");

    function checkIfApplicationsExist($login) {
        $file = fopen("databases/applications.csv", "r");
        while (($data = fgetcsv($file, 1000, ",")) !== false) {
            if ($data[1] == $login) {
                return true;
                break;
            }
        }
        return false;
    }
?>
<main>
    <?php
        if (empty($_SESSION["login"])) {
            echo '<p class="error-message">У вас нет доступа к этой странице. Авторизуйтесь, чтобы продолжить.</p>';
        }
        else {
            echo '
                <p class="page-title">Мои заявления</p>';
            if (!checkIfApplicationsExist($_SESSION["login"])) {
                echo '<p style="text-align: center; font-size: 24px; margin-bottom: 584px;">Вами не было подано ни одного заявления.</p>';
            }
            else {
                echo '<table class="my-app-table"><tr><th>ФИО</th><th>Номер авто</th><th>Описание</th><th>Статус</th></tr>';
                $file = fopen("databases/applications.csv", "r");
                while (($data = fgetcsv($file, 1000, ",")) !== false) {
                    if ($data[1] == $_SESSION["login"]) {
                        echo '<tr><td>' . $data[2] . '</td><td>' . $data[3] . '</td><td>' . $data[4] . '</td><td>' . $data[5] . '</td></tr>';
                    }
                }
                echo '</table>';
                fclose($file);
            }
        }
    ?>
</main>
<?php
    require("footer.php");
?>