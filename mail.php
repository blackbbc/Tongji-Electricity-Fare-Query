<?php

function reminder($fare)
{
    $txt="还剩下 ".$fare." 度电!\n快去充电!";
    
    mail("505968815@qq.com","冲电费辣",$txt);

}

?>
