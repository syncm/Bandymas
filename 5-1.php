<?php 



$a = array("3","2","5","5");
$b = array("4","10","6","5");
$c = array("5","8","5","5");
$i = 0;
$d = 0;




for ($i; $i<4 ;$i++) 
{
if (($a[$i] == $b[$i] ) && ($a[$i] == $c[$i]))
{
    $d = $i+1;
    echo $d,"-Lygiakrastis, ";
}


else if (($a[$i] == $b[$i] ) or ($a[$i] == $c[$i]))
{
    $d = $i+1;
    echo $d,"-Lygiasonis ";
}

else if (($b[$i] == $a[$i] ) or ($b[$i] == $c[$i]))
{
    $d = $i+1;
    echo $d,"-Lygiasonis ";
}

else if (($c[$i] == $a[$i] ) or ($c[$i] == $b[$i]))
{
    $d = $i+1;
    echo $d,"-Lygiasonis,     ";
}


else if (($a[$i] !== $b[$i]) && ($a[$i] !== $c[$i]))
{
    $d = $i+1;
echo $d,"-Ivairiakrastis, ";
}



}



?>