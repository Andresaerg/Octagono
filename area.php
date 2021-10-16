<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Área</title>
</head>
<body>
    
    <style>
    body {
        background-image: url(../background-stain-shadow-color-wallpaper-preview.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        color: white;
    }

    table{

    background-color: rgb(35, 121, 121);
    border-radius: 5px;
    color: white;

    }
    </style>

    <h1 align="center">Cálculo del Área de un Octágono Regular</h1>
    <br>
    <form method="post" action="<?php $_SERVER['PHP_SELF']?>">
    <table align="center" border="2">

        <tr>
            <td align="center">Perímetro:</td>
            <td><input type="number" name="p"></td>
        </tr>
        <tr>
            <td align="center">Apotema:</td>
            <td><input type="number" name="ap"></td>
        </tr>
        <tr>
            <td><input type="submit" name="btn" value="Calcular"></td>
            <td><input type="submit" name="btn" value="Limpiar"></td>
        </tr>

    </table>
    </form>

    <?php 

    // Realice un programa en PHP que permita calcular el área de un octágono regular

    if(isset($_POST['btn']) && $_POST['btn'] == 'Calcular'){
        if(!empty($_POST['p']) && !empty($_POST['ap']) && $_POST['p']>0 && $_POST['ap']>0){

        $p = $_POST['p'];
        $ap = $_POST['ap'];
        $a = null;

                $a = $p*$ap/2;
                echo "<br><br>";
                echo "<table align='center' border='2'>";
                echo "<tr><td align='center'> Datos Ingresados: </tr>";
                echo "<tr><td align='center'> El perímetro es = ".$p."</tr>";
                echo "<tr><td align='center'> La apotema es = " .$ap."</tr>";
                echo "<tr><td align='center'> Por lo tanto el Área es = ".$a."<tr>";
                echo "</table>";
        } elseif(!empty($_POST['p']) && !empty($_POST['ap']) && ($_POST['p']<0 || $_POST['ap']<0))

        echo "<h2 align='center'> Ambos datos deben ser positivos. </h2>";
        
        else
        
        echo "<h2 align ='center'> Por favor, ingrese ambos datos. </h2>";


    }


    ?>

</body>
</html>