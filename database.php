<?php

  global $table_prefix;
  // user details table 
  $user_sql = "CREATE TABLE IF NOT EXISTS {$table_prefix}users (
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
  $this->conn->exec($user_sql);


  // product details table
  $products_sql = "CREATE TABLE IF NOT EXISTS {$table_prefix}products (
      ID bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
      product_title VARCHAR(255) NOT NULL,
      product_description TEXT NOT NULL,
      product_price DECIMAL(10, 2) NOT NULL,
      category VARCHAR(50) NOT NULL,
      product_image VARCHAR(255) NOT NULL
  )";
  $this->conn->exec($products_sql);

?>
