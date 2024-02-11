<?php
 
$array = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];
 
echo "The Shapes to Print:\n";
for ($i = 0; $i < count($array); $i++)
{
    for ($j = 0; $j < count($array[$i]) - $i; $j++)
    {
        if (is_numeric($array[$i][$j])) 
        {
            echo $array[$i][$j] . " ";
        }
    }
    echo "\n";
}
 
echo "\n"; 
 
for ($i = 0; $i < count($array); $i++) 
{
    for ($j = 0; $j < count($array[$i]); $j++)
    {
        if (!is_numeric($array[$i][$j]))
        {
            echo $array[$i][$j] . " ";
        }
    }
    echo "\n";
}
 
?>