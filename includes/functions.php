<?php

//funzione per generare password casuale 
$rand_password = array_rand($characters, $password);

foreach($rand_password as $key){
    print $characters[$key];
}

?>