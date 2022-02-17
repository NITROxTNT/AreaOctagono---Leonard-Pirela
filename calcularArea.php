<?php 

if (!empty($_POST['lados'])) {

    $apotema = ($_POST['lados']/2)*tan(deg2rad(67.5));
    $perimetro = $_POST['lados']*8;
    $area = ($perimetro*$apotema)/2;

     if (is_numeric($area) && $area >= 0){echo json_encode($area);} else {echo json_decode("Los cálculos han salido mal");}

} else echo json_encode("No se ha podido calcular el valor");


?>