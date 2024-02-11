<?php
$num1 = 10;
$num2 = 25;
$num3 = 15;
echo "The Given numbers is : $num1,$num2,$num3\n";

if ($num1 >= $num2 && $num1 >= $num3)
{
    echo "So the largest number is:$num1\n";
} 
elseif ($num2 >= $num1 && $num2 >= $num3) 
{
    echo "So the largest number is:$num2\n";
}
else
{ 
    echo "Sonthe largest number is:$num3\n";
}
?>