<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>
    <?php
    require_once "clases/Empleat.php";

    $emp1 = new Empleat("Jordi", 2500);
    $emp2 = new Empleat("David");

    $emp1->printData();
    echo "<hr>";
    $emp2->printData();
    ?>
</body>

</html>