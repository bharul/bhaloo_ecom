<?php
// Include the config file to get the table prefix
// include_once "config.php";
require_once 'config.php';

// SQL query to create the users table
// function create_users_table($conn, $table_prefix){
  global $table_prefix;
  $sql = "CREATE TABLE IF NOT EXISTS {$table_prefix}users (
    ID bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_login varchar(60) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
    user_pass varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
    user_nicename varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
    user_email varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
    user_role varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'seller',
    user_registered datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    user_activation_key varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
    display_name varchar(250) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
    user_type varchar(250) COLLATE utf8mb4_unicode_520_ci NULL DEFAULT '',
    user_profile_avatar BIGINT(20) UNSIGNED NULL DEFAULT '0',
    other VARCHAR(255) COLLATE utf8mb4_unicode_520_ci NULL DEFAULT '',
    date_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    UNIQUE(user_login),
    UNIQUE(user_email)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci";
  
  // Execute the query
  $conn->exec($sql);
// }

?>
