<?php
include_once "../model/dataClass.class.php";

$DataClass = new DataClass();

if(isset($_POST["submit"])){
 
    $SaveAdmin = $DataClass->Save_Admin($_POST);

   
        echo "Success";
}
