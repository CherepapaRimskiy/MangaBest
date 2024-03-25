<?php
    session_start();

    $full_name = $_POST["full-name"];
    $car_number = $_POST["car-number"];
    $description = $_POST["description"];
    $login = $_SESSION["login"];
    $status = "В очереди";
    $id = 1;

    $file = fopen("../databases/applications.csv", "r");
    while (($data = fgetcsv($file, 1000, ",")) !== false) {
        $id++;
    }
    fclose($file);

    $file_normal = fopen("../databases/applications.csv", "a");
    fputcsv($file_normal, [$id, $login, $full_name, $car_number, $description, $status]);
    fclose($file_normal);

    header("Location: ../apply-form.php?success=1");
    exit;
?>