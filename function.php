<?php
// incluude all the functions 
include "config.php";

function get_header()
{
  include "header.php";
}

function get_footer()
{
  include "footer.php";
}


function admin_header()
{
  include "admin_header.php";
}

function admin_footer()
{
  include "admin_footer.php";
}

function email_exists($table_prefix, $email)
{
  $conn = database_object();
  $sql = $conn->prepare("SELECT * FROM {$table_prefix}users WHERE user_email = ?");
  $sql->bindParam(1, $email);
  $sql->execute();
  return $sql->fetch(PDO::FETCH_ASSOC);
}

function register_user($conn, $table_prefix, $firstName, $lastName, $email, $password)
{
  $sql = $conn->prepare("INSERT INTO {$table_prefix}users (user_login, user_nicename, user_email, user_pass) 
  VALUES (?, ?, ?, ?)");

  $sql->bindParam(1, $firstName);
  $sql->bindParam(2, $lastName);
  $sql->bindParam(3, $email);
  $sql->bindParam(4, $password);
  $result = $sql->execute();
  return $result;
}

function redirect($url)
{
  header('Location: ' . $url);
  die();
}

function database_object()
{
  $database = new Database();
  $conn = $database->conn;
  return $conn;
}





