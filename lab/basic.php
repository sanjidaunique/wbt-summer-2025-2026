<!DOCTYPE html>
<html>
    <body>
        <h1>My First PHP page </h1>
        
        <?php
      
//1
        $length = 20.2;
        $width = 11.8;
        $area = $length*$width;
        $perimeter = 2*($length+$width);
       echo "1. Rectangle: ","<br>"; 
echo "Length: " .$length."<br>"; 
echo "width: ". $width."<br>";
echo "AREA: ". $area."<br>";
echo "Perimeter: ". $perimeter."<br><br>";




//2 

echo "2. VAT: ","<br>";
        $taka = 500;
        $vat = $taka*0.10;

echo "TAKA: ".$taka."<br>";
echo "VAT: ".$vat."<br><br>";






//3 
echo "3. ODD/EVEN: ";
$number = 17;

echo "Number: ".$number."<br>";

if ($number % 2 == 0)
{
    echo "The number is Even.";
}
else
{
    echo "The number is Odd.<br><br>";
}





//4

echo "4. Largest Number Finding: <br>";
$s1 = 100;
$s2 = 200;
$s3 = 300;
echo "First Number: $s1<br>";
echo "First Number: $s2<br>";
echo "First Number: $s3<br>";

if ($s1 >= $s2 && $s1 >= $s3)
{
    echo "Largest Number: $s1";
}
elseif ($s2 >= $s1 && $s2 >= $s3)
{
    echo "Largest Number: $s2";
}
else
{
    echo "Largest Number: $s3<br><br>";
}






//5

echo "5. ODD NUMBERS(11-100): ";
for($i = 10; $i <= 100; $i++)
{
    if($i % 2 != 0)
    {
        echo "$i", " ";
    }
    else{}
}







//6

echo "<br><br>6. Searching in Array: <br>";
$a = [1000,2000,3000,4000,5000];
$search = "4000";

echo "Array: ";
for($i = 0; $i < 5; $i++)
{
    echo "$a[$i] ";
}
echo "<br> Search: $search<br>";

for($i = 0;$i < 5;$i++){
        if($a[$i] == $search){
            echo "Found!<br><br>";
        }
        else{
            
        }
    }





    

//7 

//star print
echo "7. <br>";
echo "STAR DESIGN: <br>";
for($i = 1;$i <= 3;$i++)
{
    for($j = 1;$j <= $i;$j++)
    {
        echo "* ";
    }
    echo "<br>";
}

echo "<br> Digit: <br>";
for($i = 3;$i >= 1;$i--)
{
    for($j = 1;$j <= $i;$j++)
    {
        echo "$j ";
    }
    echo "<br>";
}

echo "<br> Alphabet: <br>";
$x = 'A';

for($i = 1;$i <= 3;$i++)
{
    for($j = 1;$j <= $i;$j++)
    {
        echo "$x ";
        $x++;
    }
    echo "<br>";
}


        ?>
        </body>
        </html>