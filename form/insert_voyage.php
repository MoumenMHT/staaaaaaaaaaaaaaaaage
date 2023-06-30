<?php

session_start();

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    
    require_once 'db_connection.php';

    $voyage = $_POST['voyage'];
    $session = $_POST['session'];
    $statut = "off";
    $convertedValue = null;

    if ($session === "from 20/07/2023 to 25/07/2023") {
        $session = 1;
    } elseif ($session === "from 20/07/2024 to 25/07/2024") {
        $session = 2;
    }

    if ($voyage === "Turkey") {
        $convertedValue = 1;
    } elseif ($voyage === "Spain") {
        $convertedValue = 2;
    } elseif ($voyage === "Omra") {
        $convertedValue = 3;
    }

    if ($convertedValue !== null) {
        // Check if ID_persson and id_voyage already exist in demende table
        $checkQuery = "SELECT ID_persson FROM demende WHERE ID_persson = ? AND id_voyage = ?";
        $checkParams = array($user_id, $convertedValue);
        $checkStmt = sqlsrv_query($conn, $checkQuery, $checkParams);

        if ($checkStmt === false) {
            echo "Error: " . print_r(sqlsrv_errors(), true);
        } else {
            if (sqlsrv_has_rows($checkStmt)) {
                echo  "User ID: $user_id,ID_persson and id_voyage already exist in the same row.";
            } else {
                $insertQuery = "INSERT INTO demende (statut, ID_persson, id_session, id_voyage) VALUES (?,?,?,?)";
                $insertParams = array($statut, $user_id, $session, $convertedValue);
                $insertStmt = sqlsrv_query($conn, $insertQuery, $insertParams);

                if ($insertStmt === false) {
                    echo "Error: " . print_r(sqlsrv_errors(), true);
                } else {
                    echo "Vous avez bien participé";
        
                }
            }
        }
    } else {
        echo "Invalid voyage value";
    }
}
?>
