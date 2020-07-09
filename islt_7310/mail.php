<?php 

if (isset($_POST['submit'])) {
 $name = $_POST['name']
 $lastname = $_POST['lastname']
 $mailFrom = $_POST['email']
 $message = $_POST['message']

 $mailTo = "jenningsc@missouri.edu";
 $headers = "From: ".$mailFrom;
 $txt = "You have received an e-mail from " .$name. ".\n\n". $message;

 mail($mailTo, $txt, $headers);
 header("Location: index.php?mailsend")
}
?>