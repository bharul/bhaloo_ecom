<?php

require_once "config.php";
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the values from the form submission
  $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : "";
  $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : "";
  $email = isset($_POST['email']) ? $_POST['email'] : "";
  $pass = isset($_POST['password']) ? $_POST['password'] : "";
  $password = password_hash($pass, PASSWORD_DEFAULT);

  $sql = $conn->prepare("INSERT INTO ecom_users (user_login, user_nicename, user_email, user_pass) 
                  VALUES (?, ?, ?, ?)");

        $sql->bindParam(1, $firstName);
        $sql->bindParam(2, $lastName);
        $sql->bindParam(3, $email);
        $sql->bindParam(4, $password);
  if($sql->execute()){
    echo "data inserted";
  }else {
    echo "data not inserted";
  }
}

