<?php 
include "./../function.php";

function adminHeader(){
    include "admin_header.php";
}

function adminFooter(){
    include "admin_footer.php";
}

function adminHome(){
    include "admin_sections/admin_home.php";
}

function addProducts(){
    include "admin_sections/add_product.php";
}

function adminUsers(){
    include "admin_sections/admin_users.php";
}

function adminTools(){
    include "admin_sections/admin_tools.php";
}

function adminMedia(){
    include "admin_sections/admin_media.php";
}

function adminSettings(){
    include "admin_sections/admin_settings.php";
}

function pageError(){
    echo "Error : page Not Found";
}

function getUsers()
{
  global $table_prefix;
  $conn = database_object();
  $sql = $conn->prepare("SELECT * FROM {$table_prefix}users");
  $sql->execute();
  return $sql->fetchAll(PDO::FETCH_ASSOC);
}



