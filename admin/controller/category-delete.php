<?php
include_once "../model/dataClass.class.php";


$DataClass = new DataClass();

if(isset($_POST["submit"])){
 
    $SaveAdmin = $DataClass->delete_menu($_POST["delete"]);

   
        echo "Success";
}
