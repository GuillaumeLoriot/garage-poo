<?php
require_once("functions.php");
require_once("connectDB.php");
require_once("Car.php");
$pdo = connectDB();

$carsObject = selectAllCars($pdo);

$title = "Bienvenue dans le Garage";
require_once("header.php");
?>
<h1>Listes des Voitures</h1>
<div class="d-flex flex-wrap">
    <?php foreach ($carsObject as $carObject): ?>
        <div class="col-4 d-flex p-3 justify-content-center">
            <img src="images/<?php echo($carObject->getImage());?>" alt="<?php echo($carObject->getModel());?>">
            <div class="p-2">
                <h2><?php echo($carObject->getModel()); ?></h2>
                <p><?php echo($carObject->getBrand()); ?>, <?php echo($carObject->getHorsePower()); ?> chevaux</p>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php
require_once("footer.php");
?>