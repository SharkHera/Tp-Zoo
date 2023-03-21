<?php
require_once('./config/autoloadplus.php');
require_once('./config/db.php');


$Employe = new Employe($db);

$data = [
    'enclosId' => $_POST['enclosId'],
    'id' => $_POST['id']
];

$Employe->MoveAnimalToEnclosure($data);

header('location: index.php');
