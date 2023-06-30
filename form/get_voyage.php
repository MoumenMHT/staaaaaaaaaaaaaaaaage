<?php
require_once 'db_connection.php';
$voyageOptionsQuery = "SELECT * FROM offre";
    $voyageOptionsResult = $conn->query($voyageOptionsQuery);

    if ($voyageOptionsResult->num_rows > 0) {
      while ($row = $voyageOptionsResult->fetch_assoc()) {
        echo '<option value="' . $row['value'] . '">' . $row['label'] . '</option>';
      }
    }

    $conn->close();
?>