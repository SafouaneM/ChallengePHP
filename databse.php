<?php
/**
 * Created by PhpStorm.
 * User: safou
 * Date: 1-6-2018
 * Time: 14:23
 */


$host = 'localhost';
$port = '3306';
$user = 'root';
$ww = 'ronaldo';
$db = 'mydatabase';

try {
$dbh = new PDO('mysql:host='.$host.';dbname='.$db.';port='.$port , $user, $ww);
foreach($dbh->query('SELECT * from cursist')as $row) {
    print_r($row);
}
 $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
/**i tried it didnt work ;*/
