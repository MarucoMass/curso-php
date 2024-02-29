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

<section>
        <h2>Sign up</h2>
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <button>Dealé</button>
        </form>
    </section>

</body>
</html>