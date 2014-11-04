<?php

function reminder($fare)
{
    $txt="Only ".$fare." remains!\nPlease Charge ON TIME!";
    
    mail("ly505968815@gmail.com","Electricity Fare Warning",$txt);

}

?>
