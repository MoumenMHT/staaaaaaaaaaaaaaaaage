<?php
$username = $_POST['username'];
$password = $_POST['password'];

require_once 'db_connection.php';

if ($username === "admin" && $password === "admin") {
    header("Location: admin/admin.php");
    exit();
} else {
    // Prepare the query
    $sql = "SELECT ID_persson FROM person WHERE username = ? AND password = ?";
    $params = array($username, $password);
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    // Check if a matching user was found
    if ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        $user_id = $row['ID_persson']; // Get the ID from the query result

        // Check if statut is 'on' in the demande table
        $statutQuery = "SELECT statut FROM demende WHERE ID_persson = ?";
        $statutParams = array($user_id);
        $statutStmt = sqlsrv_query($conn, $statutQuery, $statutParams);

        if ($statutStmt === false) {
            die(print_r(sqlsrv_errors(), true));
        }

        // Check if a matching demande with statut 'on' was found
        if ($statutRow = sqlsrv_fetch_array($statutStmt, SQLSRV_FETCH_ASSOC)) {
            $statut = $statutRow['statut'];

            if ($statut === 'on') {
                // Status is 'on', redirect to vinqueure.php
                header("Location: vinqueur.php");
                exit();
            }
        }

        // Authentication successful but status is not 'on', redirect to index.php
        session_start(); // Start a session to store the user ID
        $_SESSION['user_id'] = $user_id;
        header("Location: index.php");
        exit();
    } else {
        // Authentication failed
        $messages[] = "Invalid username or password";
    }

    // Close the statements and connection
    sqlsrv_free_stmt($stmt);
    sqlsrv_free_stmt($statutStmt);
    sqlsrv_close($conn);

    $redirectUrl = "sign_up.php";
    if (!empty($messages)) {
        $messageString = implode("|", $messages);
        $redirectUrl .= "?message=" . urlencode($messageString);
    }

    header("Location: " . $redirectUrl);
    exit();
}
?>
