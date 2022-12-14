<?php
    $num_filas=10;
    $num_columnas = $num_filas;
    $n=0;

    //para definir funciones dentro de php se debe poner siempre function antes de la función que queremos definir
    function esPrimo($n) {
        if ($n == 0 || $n ==1) {
            return true;
        }else {
            $esprimo = true;
            $c = 2;
            while($esprimo && $c <= ($n/2)) {
                if (($n % $c) == 0)  {
                    $esprimo = false;
                }
                $c++;
            }
            return $esprimo;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz de 100 números</title>
    <link rel="stylesheet" href="piramide_estilo.css">
    <!-- poner el css como externo en base a las características que le ha puesto el a la tabla -->
</head>
<body>
    <table>
        <?php for ($i=0; $i < $num_filas; $i++) { ?>
            <!-- con esto se hace que tengamos un bucle que genere tantas filas como le indique el bucle -->
            <tr>
                <?php for ($j = 0; $j < $num_columnas; $j++) {
                    $num_s = $i*10+$j;
                    ?>
                    <td <?= (esPrimo($num_s))?'class="esPrimo"':''?>><?=$num_s?></td>    
                <?php } ?>          
            </tr>
        <?php } ?>

    </table>
</body>
</html>