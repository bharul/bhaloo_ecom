<?php
include "function.php";
$conn = database_object();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  // Get the values from the form submission
  $firstName = isset($_POST['firstName']) ? $_POST['firstName'] : "";
  $lastName = isset($_POST['lastName']) ? $_POST['lastName'] : "";
  $email = isset($_POST['email']) ? $_POST['email'] : "";
  $pass = isset($_POST['password']) ? $_POST['password'] : "";
  $password = password_hash($pass, PASSWORD_DEFAULT);
  $duplicate = email_exists($table_prefix, $email);

  if ($duplicate) {
    $message['error'] = "Email Id Already Exists";
    $message['status'] = false;
  } else {
    
    if (register_user($conn, $table_prefix, $firstName, $lastName, $email, $password)) {
      $message['success'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                              <strong> Successful!</strong> You are now member of Bhaloo Ecom.
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
      $message['status'] = true;
    } else {
      $message['error'] = "Failed To Register User";
      $message['status'] = false;
    }
  }
  echo json_encode($message);
}
