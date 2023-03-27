<div class="action center d-flex justify-content-spacebetween">
    <form action="" method="post">
        <input type="submit" name="Feed" value="Feed" class="btn btn-primary"></input>
        <input type="submit" name="Wake_Up" value="Wake_Up" class="btn btn-primary ms-2 me-2"></input>
        <input type="submit" name="Heal" value="Heal" class="btn btn-primary "></input>
        <input type="submit" name="Clear Chatbox" value="Clear Chatbox" class="btn btn-danger ms-5"></input>
        <input type="hidden" name="id" value="<?= $animal->getId() ?>">
        <input type="hidden" name="id" value="<?= $enclos->getId() ?>">

    </form>
</div>
<div class="center m-0 justify-content-center align-items-center ">
    <div class='center justify-content-center row ms-0 me-0'>
        <div class='col-md-4'>
            <div class='card'>
                <div class='card-body3 text-bg-success'>
                    <?php

                    if (isset($_POST['Feed'])) {
                        $Employe->Feed($animal);
                    }
                    if (isset($_POST['Wake_Up'])) {
                        $Employe->Awake($animal);
                    }
                    if (isset($_POST['Heal'])) {
                        $Employe->Heal($animal);
                    }
                    if (isset($_POST['Clear Chatbox'])) {
                        $Employe->Nettoyage($animal);
                    }
                    ?>


                </div>
            </div>
        </div>
    </div>
</div>