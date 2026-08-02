<!DOCTYPE html>
<html>
    <body>
        
        <?php
     
//1 
$principal = 10000;
$rate = 25;
$time = 5;
 
$simpleInterest = ($principal * $rate * $time) / 100;
 
echo "Simple Interest = $simpleInterest <br>";
 
 
//2 
$n = 2;
$count = 0;
 
for ($i = 1; $i<=$n; $i++)
    {
    if ($n % $i == 0)
        {
        $count++;
        }
    }
 
if ($count == 2)
    {
    echo "$num is a prime number.";
    }
else{
    echo "$num is not a prime number.<br>";
}
 
//3 
$n = 9;
$fact = 1;
 
for ($i = 1; $i<=$n; $i++)
    {
    $fact = $fact * $i;
    }
 
echo "Factorial of $n = $fact <br> ";
 
 
//4 
$n = [100, 900, 500, 300];
 
$sum = 0;
 
for ($i = 0; $i< 4; $i++)
    {
    $sum = $sum + $num[$i];
    }
$avg = $sum / 4;

echo "Sum = $sum <br>";

echo "Average of $n= $avg <br>";
 
 
//5 
 
for ($i = 1; $i<=4; $i++)
    {
    for ($j = 1; $j <= $i; $j++)
        {
        echo "$i ";
        }
    echo "<br>";
    }
 
        ?>
        </body>
        </html>