
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



/*

echo '<pre>';
print_r($_SERVER);
echo '<pre>';

*/


function validatePhoneNumber($phone){
    return preg_match('/^\d{3}-\d{3}-\d{3}$/',$phone);
}
function validateEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);

}


function isAdult($birthday){
    $birth = new DateTime($birthday);
    $today = new DateTime();
    $age = $today->diff($birth)->y;
    return $age >=18;
}



if($_SERVER['REQUEST_METHOD'] == "GET"){
  $name =  htmlspecialchars(trim($_GET['name']));
  $email = htmlspecialchars(trim($_GET['email']));
  $phone = htmlspecialchars(trim($_GET['phone']));
  $birthday = htmlspecialchars($_GET['birthday']);
  $subject = htmlspecialchars(trim($_GET['subject']));
  $message = htmlspecialchars(trim($_GET['message']));
  $contact_preference = htmlspecialchars(trim($_GET['contact_preference']));
  



 $errors = [];


 if(!validateEmail($email)){
    $errors[] = 'Niepoprawny format adresu e-mail';
 }

 if(!isAdult($birthday)){
    $errors[] = 'Musisz mieć co najmniej 18 lat';
 }

 if(!validatePhoneNumber($phone)){
    $errors[] = 'Numer telefonu musi być w formacie 123-456-789';
 }

if(empty($message)){
    $errors[] = 'Wiadomość nie może być pusta!';
}

 if (count($errors)) {
    echo '<h2>Wystąpiły błędy:</h2>';
    foreach ($errors as $error) {
        echo '<p>'.$error.'</p>';
        
    }
 }
 else{   
  echo <<< DATA
  <h2>Dane pobrane z formularza:</h2>
  <p><strong>Imię: </strong>$name</p>
  <p><strong>E-mail: </strong>$email</p>
  <p><strong>Telefon: </strong>$phone</p>
  <p><strong>Preferencje kontakyu: </strong>$contact_preference</p>
  <p><strong>Wiadomość: </strong>$message</p>
  <br><a href="form.html">Wróć do formularza</a>
  DATA;

 }




}
else{
  echo 'Formularz nie został wysłany poprawnie!';
  echo '<br><a href="form.html">Wróć do formularza</a>';
}














echo '<pre>';
//   var_dump($_GET);
//   echo '<hr>';
  print_r($_GET);
echo '<pre>';




?>

</body>
</html>
