<?php

echo "The Shapes to Print:\n";
for ($i = 1; $i <= 3; $i++)
{
    for ($j = 1; $j <= $i; $j++)
    {
        echo "* ";
    }
    echo "\n";
}
 
$counter = 1;
for ($i = 1; $i <= 3; $i++) 
{
    for ($j = 1; $j <= $i; $j++)
    {
        echo $counter++ . " ";
    }
    echo "\n";
}
 
$startChar = ord('A');
for ($i = 0; $i < 3; $i++) 
{
    for ($j = 0; $j <= $i; $j++)
     {
        echo chr($startChar++) . " ";
    }
    echo "\n";
}
?>
 
