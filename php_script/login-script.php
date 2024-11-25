<?php
include_once("php_functions.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$email = validateInput($_POST['email']);
$password = validateInput($password);

$getUserData = $connection -> prepare("SELECT email,password,customerID FROM user_register 
WHERE email=:email
");
$getUserData -> execute([':email' => $email]);
$userData = $getUserData -> fetch(PDO:: FETCH_ASSOC);
echo $userData['customerID'];

}
?>