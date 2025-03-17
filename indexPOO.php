<?php
require_once("Car.php");
require_once("connectDB.php");
require_once("functions.php");
$car1 = new Car(1, "cadillac", "eldorado", 210, "eldorado.jpg");
$car2 = new Car(2, "audi", "A4", 450, "audi.jpg");
var_dump($car1);
$pdo = connectDB();
?>
<p>voici la marque et le modèle de la voiture: <?php echo($car1->getBrand()); ?></p>
<?php
var_dump(selectAllCars($pdo));
?>