<?php
    session_start();

    function checkAuth($login, $password) {
        $file = fopen("../databases/users.csv", "r"); // открываем файл только для чтения с указателем в начале
        while (($data = fgetcsv($file, 1000, ",")) !== false) {
            if ($data[0] === $login && $data[1] === $password) {
                fclose($file);
                return true;
            }
        }
        fclose($file);
        return false;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $login = $_POST["login"];
        $password = $_POST["password"];

        if (checkAuth($login, $password)) {
            $_SESSION["login"] = $login;
            
            if ($login === "copp" && $password === "password") {
                $_SESSION["isAdmin"] = true;
            }

            header("Location: ../index.php");
            exit;
        }
        
        else {
            header("Location: ../auth.php?error=1");
            exit;
        }
    }
?>