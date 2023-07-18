<?php
include_once "../model/dataClass.class.php";

$DataClass = new DataClass();
$ID = $DataClass->generate_ID("food");
$_POST['ID'] = $ID;
if (isset($_POST["submit"])) {

    $SaveAdmin = $DataClass->Save_food($_POST);

        echo "Success";
}
