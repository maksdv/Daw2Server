
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles.css">
  <title>Document</title>
</head>
<body>
<?php

include_once './conection.php';

if(isset($_POST['next'])){
   
    
  $db = new Connection();
  
  $db->searchHome($_POST['moneda'], $_POST['tipo'], $_POST['zona'], $_POST['dormitorios'], $_POST['precio']);



}




?>

</body>
</html>


























