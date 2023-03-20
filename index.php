<?php

require_once('./config/autoloadplus.php');
require_once('./config/db.php');





$animal = new Requin(300, 4, 'mako', 5);
$animal->Nager();


$Employe = new Employe($db);
$allEnclos = $Employe->findAllEnclos();



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/rescue.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <title>Centre Rescue</title>
</head>

<body>

    <div class="formulaire-enclos">
        <h1>Création d'enclos</h1>
        <form action="Creation-enclos.php" method="post">
            <input type="text" name="name">
            <label for="typeEnclos">Type d'enclos :</label>
            <select name="typeEnclos" id="typeEnclos">
                <option value="enclos">Terrestre</option>
                <option value="voliere">Volière</option>
                <option value="aquarium">Aquarium</option>
            </select>
            <br>
            <input type="submit" value="Créer l'enclos">
        </form>
    </div>






    <div class="orgaEnclos">

        <div class="enclos">

        </div>

        <div class="enclos">

        </div>

        <div class="enclos">

        </div>

        <div class="enclos">

        </div>
    </div>
    <?php

    ?>

    <?php foreach ($allEnclos as $enclos) : ?>
        <div class="card col-12 col-sm-6 col-lg-2" style=text-align:center;>
            <div class="card-body">
                <h5 class="card-title">enclos existant</h5>
                <div class="mb-3">
                    <p><?= $enclos->getNom() ?></p>
                    <p><?= $enclos->getenclosType() ?></p>

                </div>
            </div>
        </div>
    <?php endforeach; ?>



</body>


</html>