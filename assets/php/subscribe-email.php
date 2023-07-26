<?php
$con_email=$_REQUEST['con_email'];


$from="From: <$con_email>\r\nReturn-path: $con_email";
$subject="Email subcribed";
$con_message="You Have New Subcriber.\nEmail: $con_email";
mail("sathish8608855@gmail.com,jeffrinjen10@gmail.com", $subject, $con_message, $from);



// Redirect browser
header("Location: https://writingnut.animalcafe.in/Original/home.php");
 
exit;

?>