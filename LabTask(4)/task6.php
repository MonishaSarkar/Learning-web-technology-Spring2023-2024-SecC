<?php
$numbers = [2, 5, 8, 12, 18, 25, 30];
$searchNumber = 12;
echo "The Search number is: $searchNumber\n";
$found = false;

for ($i = 0; $i < count($numbers); $i++) 
{
    
    if ($numbers[$i] === $searchNumber)
    {
        $found = true;
        break;
    }
}
if ($found)
{
    echo "The number $searchNumber is found in the array.\n";
}
else
{
    echo "The number $searchNumber is not found in the array.\n";
}
?>
