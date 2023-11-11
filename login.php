<?php
include "function.php";
get_header();
include "form/login_form.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['login_email'];
    $password = $_POST['login_password'];

    $conn = database_object();

    $user = email_exists($conn, $table_prefix, $email);

    if ($user && password_verify($password, $user['user_pass'])) {
        
        redirect('form/side_bar.php');
    } else {
        echo "Login failed.";
    }
}
get_footer();
?>
