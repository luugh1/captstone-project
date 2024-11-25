<?php
include_once("php_functions.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $firstname = htmlspecialchars($_POST['firstname'] ?? '');
        $lastname = htmlspecialchars($_POST['lastname'] ?? '');
        $email = htmlspecialchars($_POST['email'] ?? '');
        $password = htmlspecialchars($_POST['password'] ?? '');
        $verify_password = htmlspecialchars($_POST['verify_password'] ?? '');
        $address = htmlspecialchars($_POST['address'] ?? '');
        $customerId = substr($firstname, 0, 1).substr($lastname, 0, 1).str_pad(random_int(1, 999999999999), 12, '0', STR_PAD_LEFT);

if(
    empty(validateInput($firstname)) || empty(validateInput($lastname)) || empty(validateInput($email)) 
    || empty(validateInput($password)) || empty(validateInput($verify_password)) 
    || empty(validateInput($address))){
        
    }else{
        $password = password_hash($password, PASSWORD_BCRYPT);
        $check_dup = $connection->prepare("SELECT email FROM user_register WHERE email=:email");
        $result = $check_dup->execute([':email' => $email]);
        if ($check_dup->rowCount() < 1) {
        $userData = [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'email' => $email,
            'password' => $password,
            'address' => $address,
            'customerID' => $customerId,
            'activation_status' => "0",
            'registration_date' => date("Y-m-d H:i:s"),
        ];
        // Call the function for user registration
        echo insertRecord($connection, 'user_register', $userData);
        }else{
            $message = ["message" => "duplicate"];
            echo json_encode($message);
        }
    }
    }

?>