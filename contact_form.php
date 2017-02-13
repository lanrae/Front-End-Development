<?php

 
//Prefedined Variables  
$to = "info@lanraeictsolutions.com";

// Email Subject
$subject = "Andela Project.";

if($_POST) {

// Collect POST data from form
$name = stripslashes($_POST['name']);
$email = stripslashes($_POST['email']);
$phone = stripslashes($_POST['phone']);

// Collecting all content in HTML Table
$content='<table width="100%">
<tr><td  align "center"><b>Contact Details</b></td></tr>
<tr><td>Name:</td><td> '.$name.'</td></tr>
<tr><td>Email:</td><td> '.$email.' </td></tr>
<tr><td>Phone:</td><td> '.$phone.'</td></tr>
<tr><td>Date:</td> <td> '.date('d/m/Y').'</td></tr>
</table> ';

// Define email variables
$headers = "From:".$email."\r\n";
$headers .= "Reply-to:".$email."\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8';

if( ! empty($name) && ! empty($email) && ! empty($content) ) {

// Sending Email 
if( mail($to, $subject, $content, $headers) ) {
//  To redirect form on a particular page
header("Location:https://andela.com/apply");
}
else {
print "<p>Please go back and fill that form again .</p>";
return false;
}
}
else {
print "<p><h1>Please Fill In The Form.</h1></p>";
return false;
}
}
?>