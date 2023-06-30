<?php
// Retrieve the form data
$nom = $_POST['nom'];
$birthdate = $_POST['birthdate'];
$matricule = $_POST['matricule'];
$date_daumbauche = $_POST['date_daumbauche'];
$SF = $_POST['SF'];
$address = $_POST['adress'];
$type = $_POST['type'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$code= $_POST['code'];
$region=$_POST['region'];


require_once 'db_connection.php';

$sql1 = "SELECT * FROM person WHERE username = ? OR email = ?";
$params2 = array($username, $email);
$stmt2 = sqlsrv_query($conn, $sql1, $params2);

if ($stmt2 === false) {
    die(print_r(sqlsrv_errors(), true));
}

if (sqlsrv_fetch($stmt2) === true){
    $messages[] = "the username or email alredy exict";
}
else{




    // Check if the password and confirm password match
    if ($password !== $confirm_password) {
        $messages[] = "Error: Password and confirm password do not match.";
        exit();
    }

    // Convert date values to the proper format
    $birthdate = date('Y-m-d', strtotime($birthdate));
    $date_daumbauche = date('Y-m-d', strtotime($date_daumbauche));

    

    $sql = "INSERT INTO person (non, prenon, date_naissence, matricule, date_dembauche, SF, adresse, type, email, username, password) 
            OUTPUT INSERTED.ID_persson -- Retrieve the inserted ID
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $params = array($nom, $prenom, $birthdate, $matricule, $date_daumbauche, $SF, $address, $type, $email, $username, $password);
    $stmt = sqlsrv_query($conn, $sql, $params);

    if ($stmt === false) {
        $messages[] = "Error: " . print_r(sqlsrv_errors(), true);
    } else {
        // Get the last inserted ID
        $lastInsertedID = sqlsrv_fetch_array($stmt)['ID_persson'];
        

        // Insert into the "structure" table
        $structureSql = "INSERT INTO structure (code, type_st, region,  id_persson) VALUES (?, ?, ?, ?)";
        $structureParams = array($code, $type, $region, $lastInsertedID );
        $structureStmt = sqlsrv_query($conn, $structureSql, $structureParams);

        if ($structureStmt === false) {
            $messages[] = "Error: " . print_r(sqlsrv_errors(), true);
        } else {
            // Redirect the user to index.php
            
            header("Location: sign_up.php");
            exit();
        }
    }
    
    sqlsrv_close($conn);
}



$redirectUrl = "sign_up.php";
if (!empty($messages)) {
    $messageString = implode("|", $messages);
    $redirectUrl .= "?message=" . urlencode($messageString);
}
header("Location: " . $redirectUrl);
exit();

?>
