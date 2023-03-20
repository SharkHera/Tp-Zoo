<?php
try{
$db = new  PDO('mysql:host=127.0.0.1;dbname=tp-zoo','root','', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

}catch(PDOException  $ex){
    die('erreur db');
}
