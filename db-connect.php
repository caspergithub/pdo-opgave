<?php 


// PDO connection Config data der hjælper med at connecte til database

// database info
$host="localhost";
$dbName="pdo-opgave";
$user="root";
$passwd="root";

// byg DSN data source name Driver (database type) database navn og evt. port=3306;charset=utf8mb4
$dsn = "mysql:host=".$host.";dbname=".$dbName;
//echo $dsn;

// attributter til PDO object her de mest almindelige
$options = [PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
PDO::ATTR_EMULATE_PREPARES=> false];// pdo::attr_emulate_prepares skal altid være false! Ellers bliver der åbnet et kæmpe sikkerhedshul


?>