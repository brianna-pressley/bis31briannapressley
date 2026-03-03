<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Loops Assignment</title>
</head>
<body>

<h1>Week 6: PHP Loops</h1>

<h2>1) For Loop: Print numbers 1 to 18</h2>
<?php
for ($i = 1; $i <= 18; $i++) {
    echo $i . " ";
}
?>

<h2>2) While Loop: Print numbers 1 to 27</h2>
<?php
$j = 1;
while ($j <= 27) {
    echo $j . " ";
    $j++;
}
?>

<h2>3) Do-While Loop: Print numbers 1 to 15</h2>
<?php
$k = 1;
do {
    echo $k . " ";
    $k++;
} while ($k <= 15);
?>

<h2>4) Sum of all odd numbers from 2 to 21</h2>
<?php
$sum = 0;
for ($n = 2; $n <= 21; $n++) {
    if ($n % 2 != 0) { 
        $sum += $n;
    }
}
echo "Sum of odd numbers: " . $sum;
?>

<h2>5) Product of all even numbers from 3 to 17</h2>
<?php
$product = 1;
for ($m = 3; $m <= 17; $m++) {
    if ($m % 2 == 0) {
        $product *= $m;
    }
}
echo "Product of even numbers: " . $product;
?>

</body>
</html>
