<?php

ini_set( 'display_errors', 1 );

error_reporting( E_ALL );

$from = $_POST['email'];

$to = "support@unify-immigration.ca";

$subject = $_POST['subject'];

$message = $_POST['message'];

$headers = "From:" . $from;

if(mail($to,$subject,$message, $headers)) {
    
header("Location: https://unify-immigration.ca/#contpage");


} else {

echo "The email message was not sent.";

}

?>