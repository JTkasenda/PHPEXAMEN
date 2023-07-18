<?php
include_once "../model/dataClass.class.php";

$DataClass = new DataClass();

if(isset($_POST["submit"])){
    $SaveAdmin = $DataClass->update_Admin($_POST);

   
    if(!$SaveAdmin){
        echo "Error: Dublication de donees";

    }
    else{
        echo "Success";
    }
}
