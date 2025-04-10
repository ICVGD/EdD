<?php

$edades= ["sofia"=> 15,"mario"=> 20,"Paco"=> 34,"ana"=> 45,"juan"=> 27];
asort($edades);

$edadesFiltradas = array_filter($edades,function($value)
{
    return $value > 18;
});
print_r($edadesFiltradas);



?>
