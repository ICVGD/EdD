<?php 
$numeros =[1,2,7,8,14,2,94];
$numeroFiltrar = array_filter($numeros,function($value)
{
    return $value > 4;
});


print_r($numeroFiltrar)

?>
