<?php

require_once('./config/autoloadplus.php');
require_once('./config/db.php');



$Employe = new Employe($db);
$id = intval($_POST['id']);

$enclos = $Employe->findEnclosById($id);

$allAnimaux = $Employe->DisplayAnimalByEnclosId($id);



?>


<?php
require_once("./NavBar.php");
?>

<head>
    <link rel="stylesheet" href="/css/general.css">
</head>


<body>



    <h1 class="center m-5">Here are the current resident animal :</h1>

    <?php foreach ($allAnimaux as $animal) : ?>
        <div class="card center " style="width: 18rem;">
            <img src="/images/animaux-mignons-blanc_1308-35096.avif " class="card-img-top" alt="d">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <h4 class="card-text"><?= $animal->getName() ?></h4>
                <h6 class="card-text"><?= $animal->getnomEspece() ?></h6>
                <form action="MoveAnimal.php" method="post">
                    <input type="hidden" name="id" value="<?= $animal->getId() ?>">
                    <input type="hidden" name="id" value="<?= $enclos->getId() ?>">
                    <?php pretyDump($animal); ?>

                    <button class="btn btn-primary">Move Animal</button>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        info
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Info Animal</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <?php $animal->displayCharacteristics(); ?>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php require('./PlayAction.php');    ?>
    <?php endforeach; ?>


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>