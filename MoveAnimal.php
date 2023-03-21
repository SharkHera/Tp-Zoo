<?php

require_once('./config/autoloadplus.php');
require_once('./config/db.php');


$Employe = new Employe($db);
$allAnimaux = $Employe->findAllAnimaux();
$allEnclos = $Employe->findAllEnclos();

?>

<?php
require_once("./NavBar.php");

?>

<head>
    <link rel="stylesheet" href="/css/general.css">
</head>

<body>

    <h1 class="center m-5">Choose where to move the selected animal</h1>

    <?php foreach ($allEnclos as $enclos) : ?>
        <div class="card center " style="width: 18rem;">
            <img src="/images/zoo-enclos.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <h4 class="card-text"><?= $enclos->getNom() ?></h4>
                <h6 class="card-text"><?= $enclos->getenclosType() ?></h6>

                <form action="AnimalToEnclosure.php" method="post">
                    <input type="hidden" name="enclosId" value="<?= $enclos->getId() ?>">
                    <input type="hidden" name="id" value="<?= $_POST['id']  ?>">

                    <button class="btn btn-primary">Move Animal</button>
                </form>
            </div>
        </div>
    <?php endforeach; ?>





</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>