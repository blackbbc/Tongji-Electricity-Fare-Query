<?php

function reminder($fare)
{
    $txt="还剩下 ".$fare." 度电!\n快去充电!";
    
    mail("ly505968815@gmail.com","冲电费辣",$txt);

}

?>
