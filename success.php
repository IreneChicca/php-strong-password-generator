<?php
include 'functions.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <title>Complimenti!</title>
</head>
<body>
    <div class="border border-warning w-75 p-5 m-auto text-center"> 

    <h3>Congratulazioni, hai una nuova password!</h3>

    <h1> <?php if($pswlegth){echo generatepsw($pswlegth);}  ?></h1>

    </div>
</body>
</html>