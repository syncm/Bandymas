<?php 


$vardas ="kkkk";

$a = array("3","2","5","5");
$b = array("4","10","6","5");
$c = array("5","8","5","5");
$i = 0;
$d = 0;
$plotas1;
$plotas2;
$plotas3;


for ($i; $i<4 ;$i++) 
{
if (($a[$i] == $b[$i] ) && ($a[$i] == $c[$i]))
{
    $d = $i+1;
    echo $d,"-Lygiakrastis, ";
$plotas1 = ($a[$i] * $a[$i])/2;
echo "=",$plotas1,";";
}


else if (($a[$i] == $b[$i] ) or ($a[$i] == $c[$i]))
{
    $d = $i+1;
    echo $d,"-Lygiasonis ";
    $plotas2 = ($b[$i] * $c[$i])/2;
    echo"=", $plotas2,";";
}

else if (($b[$i] == $a[$i] ) or ($b[$i] == $c[$i]))
{
    $d = $i+1;
    echo $d,"-Lygiasonis ";
    $plotas2 = ($a[$i] * $c[$i])/2;
    echo"=", $plotas2,";";
}

else if (($c[$i] == $a[$i] ) or ($c[$i] == $b[$i]))
{
    $d = $i+1;
    echo $d,"-Lygiasonis,     ";
    $plotas2 = ($a[$i] * $b[$i])/2;
    echo "=",$plotas2,";";
}


else if (($a[$i] !== $b[$i]) && ($a[$i] !== $c[$i]))
{
    $d = $i+1;
echo $d,"-Ivairiakrastis, ";

if (($a[$i] >$b[$i] ) && ($a[$i] >$c[$i]))
{
    $plotas3 = ($b[$i] * $c[$i])/2;

}

else if (($b[$i] >$a[$i] ) && ($b[$i] >$c[$i]))
{
    $plotas3 = ($c[$i] * $a[$i])/2;

}


else if (($c[$i] >$a[$i] ) && ($c[$i] >$b[$i]))
{
    $plotas3 = ($a[$i] * $b[$i])/2;

}

echo"=", $plotas3,";   ";
}



}



?>