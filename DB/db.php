<?php
define('dns', 'mysql:host=127.0.0.1;dbname=gessolutionbi;charset=UTF8mb4');
define('users', 'root');
define('pass', '');

try {
    $connexion = new PDO(dns, users, pass);
    
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}





