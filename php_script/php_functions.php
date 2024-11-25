<?php
include_once("db-config.php");

function insertRecord($connection, $table, $data) {
    try {
        
        // Step 2: Build the insert query
        $columns = implode(", ", array_keys($data));
        $placeholders = ":" . implode(", :", array_keys($data));
        $insertQuery = "INSERT INTO $table ($columns) VALUES ($placeholders)";
        $insertStmt = $connection->prepare($insertQuery);

        // Step 3: Execute the insert query
        $insertStmt->execute($data);

        if ($insertStmt) {
            $message = ["message" => "success"];
            return json_encode($message);
        }
    } catch (PDOException $e) {
        return "An error occurred: " . $e->getMessage();
    }
}




// this function filters the user input for injection.
function validateInput($data)
{
    return htmlspecialchars(trim($data));
}

// Function to validate email
function isValidEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
?>
