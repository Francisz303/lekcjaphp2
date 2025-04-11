
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php

$name = 'Janusz';
echo 'Imię: '.$name.'<br>';

$age = 20;
// if ($age >= 18){
//  echo 'Pełnoletni';
// }
// else{
//  echo 'Niepełnoletni';

// }

//Alternatywna składnia

if ($age >= 18):
 echo 'Pełnoletni';
else:
 echo 'Niepełnoletni';
endif;

$tab = ['a','b','c'];

// foreach ($tab as $key => $value) {
//  echo '<hr>'.$value.'<br>';
// }

//Alternatywna składnia

foreach ($tab as $key => $value): 
  echo '<hr>'.$value.'<br>';
endforeach;



function Add($a,$b){
  return $a+$b;
}

echo Add(4,5);


//herdoc

$surname = 'Nowak';

echo <<< DATA
<br>
Imię: Janusz
<br>
Nazwisko: $surname
DATA;

//nowdoc


echo <<< 'DATA'
<br>
Imię: Janusz
<br>
Nazwisko: $surname
DATA;


$name = 'Anna';
$surname = 'Nowak';

echo "<hr>$name $surname";
echo '<hr>$name $surname';






?>
    
</body>
</html>




