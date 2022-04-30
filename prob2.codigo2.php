<?php

{
    $precio = floatval ($_POST['Coloque_el_precio']);
    $cantidad = floatval ($_POST['Cuantos_comprara']);
    $NuePrecio=0.05*$precio;
    $compra=$NuePrecio*$cantidad;
    $descuento=0.07*$compra;
    $pagar=$compra-$descuento;
    $obsequio=2*$cantidad;
    echo 'Nuevo precio : '. $NuePrecio ."<br>";
    echo 'Importe de la compra: '. $compra . "<br>";
    echo 'Importe del descuento: '. $descuento ."<br>";
    echo 'Importe a pagar: '. $pagar ."<br>";
    echo 'Total de obsequios: '. $obsequio ."<br>";

}?>