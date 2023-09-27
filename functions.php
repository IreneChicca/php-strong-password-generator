<?php  
function generatepsw($pswlegth){

    $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ.-?=/&%£!@";

    $password = "";

    for ($i = 0; $i < (int)$pswlegth; $i++){

        $password .= $chars[rand(0, strlen($chars) -1)];


     };

    
     
        return $password;
     }



?>