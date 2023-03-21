<?php

require_once('./config/autoloadplus.php');
require_once('./config/db.php');

if (isset($_POST['name']) && isset($_POST['nomEspece'])) {
    $Employe = new Employe($db);

    var_dump('test');

    // récupération du nom du héros et du personnage choisi : 
    $data = [
        'type' => $_POST['type'],
        'name' => $_POST['name'],
        'nomEspece' => $_POST['nomEspece']
    ];


    // création d'une instance de la classe correspondant au personnage choisi
    switch ($_POST['nomEspece']) {
        case 'ours':
            $ours = new Ours($data);
            $Employe->AjouterAnimaux($ours);

            header('location: AddAnimal.php');
            break;

        case 'requin':
            $requin = new Requin($data);
            $Employe->AjouterAnimaux($requin);

            header('location: AddAnimal.php');
            break;
        case 'tigre':
            $tigre = new Tigre($data);
            $Employe->AjouterAnimaux($tigre);

            header('location: AddAnimal.php');
            break;
        case 'aigle':
            $aigle = new Aigle($data);
            $Employe->AjouterAnimaux($aigle);

            header('location: AddAnimal.php');
            break;
    }
}
