<?php


    
#Connection for database Xsarus (if error can not find driver, install mysqlnd)
$host = 'mysql57-2';
$db   = 'nick_test3';
$user = 'xsarus';
$pass = 'xsarus';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
     die($e->getMessage());
}

// try{
//     $pdo = new PDO('mysql:host=mysql57-2;dbname=nick_test3','xsarus','xsarus');
// } catch (PDOException $e){
//     die($e->getMessage());
// }

