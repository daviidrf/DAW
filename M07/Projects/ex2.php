<?php
require_once 'functions.php';
header_nav("Exercici 2");
?>
<div class="mx-auto" style="text-align: center;" id="formulario">
    <h1>VERIFICADOR DE DNI</h1>
    <form action="ex2.php" method="post" style="margin-bottom: 2rem;">
        <label style="margin-bottom: 10px;">Escribe un DNI :</label>
        <input type="text" name="DNI" class="form-control col-6 mx-auto" placeholder="DNI" style="width: 9rem;">
        <input type="submit" name="verifica" value="Verifica" class="btn btn-primary" style="margin-top: 10px;">
    </form>

    <?php
    $dni = $_POST['DNI'];
    $abc = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];

    if (strlen($dni) == 9) {
        if ($abc[substr($dni, 0, 8) % 23] == substr($dni, 8)) {
            echo "DNI VALIDO";
        } else {
            echo "DNI NO VALIDO!";
        }
    } else {
        echo "Formato no valido!";
    }
    ?>
</div>
</body>

</html>