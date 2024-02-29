<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    require_once "Classes/Car.php";

    $car_01 = new Car("Ford", "rojo");

    $car_01->set_brand("Peugeot"); // No lo va a asignar porque en el setter la entrada de datos esta filtrada

    echo $car_01->get_brand();
?>


</body>
</html>