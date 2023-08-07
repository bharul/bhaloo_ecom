<?php
require_once "config.php";
session_start();

function email_exists($conn, $table_prefix, $email){
  $sql = $conn->prepare("SELECT * FROM {$table_prefix}users WHERE user_email = ?");
  $sql->bindParam(1,$email);
  $sql->execute();
  return $sql->fetch(PDO::FETCH_ASSOC);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the values from the form submission
  $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : "";
  $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : "";
  $email = isset($_POST['email']) ? $_POST['email'] : "";
  $pass = isset($_POST['password']) ? $_POST['password'] : "";
  $password = password_hash($pass, PASSWORD_DEFAULT);
  $duplicate = email_exists($conn, $table_prefix, $email);
  if ($duplicate){
    $message['error'] = "Email Id Already Exists";
    $message['status'] = false;
  } else {

  $sql = $conn->prepare("INSERT INTO {$table_prefix}users (user_login, user_nicename, user_email, user_pass) 
              VALUES (?, ?, ?, ?)");

  $sql->bindParam(1, $firstName);
  $sql->bindParam(2, $lastName);
  $sql->bindParam(3, $email);
  $sql->bindParam(4, $password);
  if($sql->execute()){
    $message['success'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                              <strong> Successful!</strong> You are now member of Bhaloo Ecom.
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
    $message['status'] = true;
  }else {
    $message['error'] = "Failed To Register User";
    $message['status'] = false;
  }
   
  }
  // echo $message;
  echo json_encode($message);
  
}