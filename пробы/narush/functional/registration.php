<?php
    $login = $_POST["login"];
    $password = $_POST["password"];
    $name = $_POST["last-fir-mid"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone-number"];

    $file = fopen("../databases/users.csv", "r");

    if ($file !== false) {
        while (($data = fgetcsv($file, 1000, ",")) !== false) {
            if ($data[0] == $login) {
                fclose($file);
                header("Location: ../reg.php?error=1");
                exit;
                break;
            }
        }
        fclose($file);
        $file_normal = fopen("../databases/users.csv", "a");
        fputcsv($file_normal, [$login, $password, $name, $email, $phone_number]);
        fclose($file_normal);

        header("Location: ../index.php");
        exit;
    }
?>