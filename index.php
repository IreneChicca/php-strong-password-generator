<?php

$pswlegth = isset($_GET['pswlength']);



 function generatepsw($pswlegth){

    $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.-òàùè+_ç°§*é^?=/&%£!@#";

    $password = "";

    for ($i = 0; $i < (int)$pswlegth; $i++){

        $password .= $chars[rand(0, strlen((int)$chars) -1)];


     };

    
     var_dump($password);
        return $password;
     }

    
     echo generatepsw(20);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   
<div class="w-50 p-5 m-auto border border-warning mt-3">

<h3 class="mb-5">Inserisci la lunghezza della password:</h3>

    <form method="GET">

    <div class="input-group mb-3">
  <input name="pswlength" type="text" class="form-control" placeholder="Inserisci un numero da 1 a 20" aria-label="Recipient's username" aria-describedby="button-addon2">
  <button class="btn btn-outline-secondary bg-warning text-black" >Invia</button>
</div>

    </form>


     <div><?php if($pswlegth){echo generatepsw($pswlegth);}  ?></div>

</div>


</body>
</html>