<?php
require_once('credenciais.php');
try{
$con = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//echo "Connected successfully";
}catch(PDOException $e){
    echo "Connection failed";
}
?>