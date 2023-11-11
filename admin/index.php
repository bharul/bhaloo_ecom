<?php 
include "admin_functions.php";


$page = $_GET['page'] ?? 'default';

switch($page) {
    case 'admin_home':
        adminHeader();
        adminHome();
        adminFooter();
        break;

    case 'add_products':
        adminHeader();
        addProducts();
        adminFooter();
        break;

    case 'admin_users':
        adminHeader();
        adminUsers();
        adminFooter();
        break;

    case 'admin_media':
        adminHeader();
        adminMedia();
        adminFooter();
        break;

    case 'admin_settings':
        adminHeader();
        adminSettings();
        adminFooter();
        break;

    case 'admin_tools':
        adminHeader();
        adminTools();
        adminFooter();
        break;

    default: 
    adminHeader();
    adminHome();
    adminFooter();
        break;
}

//footer section 
