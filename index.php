<?php

session_start();



include 'functions.php';

$is_form_submitted = isset($_GET['pswlength']);

if($is_form_submitted) {
    $pswlegth = ((int)$_GET['pswlength']);
    $_SESSION['pswlength'] = $pswlegth;


    if($pswlegth >= 5){ 
    
        header('Location: ./success.php');
    
    };
}




    
     
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
   
<div class="w-50 p-5 m-auto border border-warning mt-3 text-center">

<h3 class="mb-5">Inserisci la lunghezza della password:</h3>
<a href="./index.php">reset</a>

    <form method="GET">

    <div class="input-group mb-3">
  <input name="pswlength" type="text" class="form-control" placeholder="Inserisci un numero da 5 a 20" aria-label="Recipient's username" aria-describedby="button-addon2">
  <button class="btn btn-outline-secondary bg-warning text-black" >Invia</button>
</div>

    </form>

    <h6> 
        <?php 
        if($is_form_submitted && $pswlegth < 5)
        { 
            echo "Attenzione! La tua password deve avere almeno 5 caratteri";
        }

        else {
            if($is_form_submitted){
            echo "<h6>La tua nuova password è: </h6>".generatepsw($pswlegth);}
        }
         ?> 
    </h6>
     
</div>


</body>
</html>