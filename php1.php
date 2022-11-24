<?php 
$masrk = 101;
if ($mark >= 80 && $mark <= 100){
    echo ("$mark = A");
}elseif($mask >= 70 && $mark <80){//70-79
echo("$mask = B");
}elseif($mask >= 60 && $mark <80){//60-60
    echo("$mask = C");
}elseif($mask >= 50 && $mark <80){//50-59
    echo("$mask = D");
}elseif($mask >= 70 && $mark <80){//0-50
    echo("$mask = F");
}else{
    echo ("$mark = Fails");//-1 and 101

}