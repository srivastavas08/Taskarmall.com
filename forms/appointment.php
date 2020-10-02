<?php

if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $date=$_POST['date'];
    $mall=$_POST['mall'];
    $message=$_POST['message'];

$mailto = "nhi578@honeys.be";
$headers = "From: ".$email;
$txt = "You have received an Appointment from ".$name.".\n\n phone number = ".$phone"\n\n date and mall intrested".$date"\n".$mall"\n\n".$message;
mail($mailto, $headers, $txt);

}