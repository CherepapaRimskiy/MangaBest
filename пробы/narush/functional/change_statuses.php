<?php
    function saveChanges($data, $file) {
        $fp = fopen($file, "w");
        foreach ($data as $fields) {
            fputcsv($fp, $fields);
        }
        fclose($fp);
    }

    if (isset($_POST["save_changes"])) {
        $status_changes = $_POST["status"];
        $data = [];

        $file = fopen("../databases/applications.csv", "r");
        while (($row = fgetcsv($file, 1000, ",")) !== false) {
            $data[] = $row;
        }
        fclose($file);

        foreach ($data as $key => $row) {
            if (isset($status_changes[$key])) {
                $data[$key][5] = $status_changes[$key];
            }
        }

        saveChanges($data, "../databases/applications.csv");
        
        header("Location: ../admin.php?success=1");
        exit;
    }
?>