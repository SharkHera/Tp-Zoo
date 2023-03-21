<?php

require_once('./config/autoloadplus.php');
require_once('./config/db.php');








$Employe = new Employe($db);
$allEnclos = $Employe->findAllEnclos();



?>


<?php
require_once("./NavBar.php");
?>

<head>
    <link rel="stylesheet" href="/css/general.css">
</head>

<body>



    <div class="center mt-5">
        <div class="formulaire-enclos">
            <h1>Création d'enclos</h1>
            <form action="Creation-enclos.php" method="post">
                <label for="name">Nom D'enclos : </label>
                <input type="text" name="name">
                <label for="typeEnclos">Type d'enclos :</label>
                <select name="typeEnclos" id="typeEnclos">
                    <option value="terrestre">Terrestre</option>
                    <option value="voliere">Volière</option>
                    <option value="aquarium">Aquarium</option>
                </select>
                <input type="hidden" name="cleanliness" value="Propre">
                <br>
                <input type="submit" value="Créer l'enclos">
            </form>
        </div>
    </div>






    <?php

    ?>

    <?php foreach ($allEnclos as $enclos) : ?>
        <div class="card center " style="width: 18rem;">
            <img src="/images/zoo-enclos.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <h4 class="card-text"><?= $enclos->getNom() ?></h4>
                <h6 class="card-text"><?= $enclos->getenclosType() ?></h6>
                <form action="DisplayAnimal.php" method="post">
                    <input type="hidden" name="id" value="<?= $enclos->getId() ?>">

                    <button class="btn btn-primary">Show Animal</button>
                </form>

            </div>
        </div>
    <?php endforeach; ?>



</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>