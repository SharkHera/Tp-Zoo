<?php
require_once('./config/autoloadplus.php');
require_once('./config/db.php');

if (isset($_POST['typeEnclos']) && isset($_POST['name']) && isset($_POST['cleanliness'])) {
    $Employe = new Employe($db);


    // récupération du nom du héros et du personnage choisi : 
    $data = [
        'typeEnclos' => $_POST['typeEnclos'],
        'name' => $_POST['name'],
        'cleanliness' => $_POST['cleanliness']
    ];


    // création d'une instance de la classe correspondant au personnage choisi
    switch ($_POST['typeEnclos']) {
        case 'terrestre':
            $enclos = new Enclos($data);
            $Employe->AjouterEnclos($enclos);

            header('location: index.php');
            break;

        case 'aquarium':
            $enclos = new Aquarium($data);
            $Employe->AjouterEnclos($enclos);

            header('location: index.php');
            break;
        case 'voliere':
            $enclos = new Volière($data);
            $Employe->AjouterEnclos($enclos);

            header('location: index.php');
            break;
    }
}
