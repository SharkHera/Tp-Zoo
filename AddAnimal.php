<?php

require_once('./config/autoloadplus.php');
require_once('./config/db.php');








$Employe = new Employe($db);
$allAnimaux = $Employe->findAllAnimaux();




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
            <h1>Add Animals</h1>
            <form action="CreationAnimal.php" method="post">
                <label for="name">Choisir un nom :</label>
                <input type="text" name="name" id="name">
                <label for="nomEspece">Animal :</label>
                <select name="nomEspece" id="nomEspece">
                    <option value="ours">Ours</option>
                    <option value="aigle">Aigle</option>
                    <option value="requin">Requin</option>
                    <option value="tigre">Tigre</option>
                </select>
                <label for="name">Quel est son poids ? :</label>
                <input type="number" min="5" max="100" name="poids" id="poids">

                <label for="name">Quel est sa taille en M ? :</label>
                <input type="number" min="1" max="20" name="taille" id="taille">

                <label for="name">Quel est son Age ? :</label>
                <input type="number" min="0" max="40" name="age" id="age">

                <input type="hidden" name="id" value="<?php $id ?>">
                <br>
                <input type="submit" value="Add Animal">
            </form>
        </div>
    </div>



    <?php foreach ($allAnimaux as $animal) : ?>
        <div class="card center " style="width: 18rem;">
            <img src="/images/zoo-enclos.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <h4 class="card-text"><?= $animal->getName() ?></h4>
                <h6 class="card-text"><?= $animal->getnomEspece() ?></h6>
                <form action="MoveAnimal.php" method="post">
                    <input type="hidden" name="id" value="<?= $animal->getId() ?>">

                    <button class="btn btn-primary">Move Animal</button>
                </form>
            </div>
        </div>
    <?php endforeach; ?>





</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>