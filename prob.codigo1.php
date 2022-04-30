<?php
{
    $hijos_en_edad_escolar = floatval ($_POST['hijos_en_edad_escolar']);
    $total_vendido = floatval ($_POST['total_vendido']);
    $sueldo_basico=600;
    $bonificacion=50*$hijos_en_edad_escolar;
    $comision=$total_vendido*0.075;
    $sueldo_bruto=$sueldo_basico+$comision+$bonificacion;
    $descuento=$sueldo_bruto*0.11;
    $sueldo_neto=$sueldo_bruto-$descuento;
    echo 'La  comision es: ' . $comision . "<br/>";
    echo 'La bonificacion es: ' . $bonificacion . "<br/>";
    echo 'Valor de sueldo bruto es: ' . $sueldo_bruto . "<br/>";
    echo 'El valor del descuento es: ' . $descuento . "<br/>";
    echo 'El valor de sueldo neto es: ' . $sueldo_neto . "<br/>";
    echo 'El valor de sueldo basico es: ' . $sueldo_basico . "<br/>";
    
    
}?>