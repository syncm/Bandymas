<?php 




$a = array("-10","0","2","9","-5");

$s = count($a);

$temp = 0;
$b = $a[0];

for ($i = 0 ; $i<$s ; $i++)
{
$tikr = 0;
   for ($j = 0; $j<$s-1; $j ++)
   {
       if ($a[$j+1]> $a[$j])
       {
$temp =$a[$j];
$a[$j]=$a[$j+1];
$a[$j+1]=$temp;
$tikr = 1;
       }
   }
}

for ($i = 0; $i<$s; $i++)
{

echo " ",$a[$i];

}


?>
