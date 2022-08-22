""
<?php 
if(!isset($_POST['submit'])){
    echo "You need to submit this form, for later processing.";
}

$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$email = $_POST['email'];
$country = $_POST['country'];
$message = $_POST['message'];
$fullname = $firstname.' '.$lastname;

//validation
if (empty($firstname) || empty($lastname) || empty($email) || empty($country)) {
    echo "FullName, Email and Country is mandatory"; exit();
}

$email_form = 'babdulai149@gamil.com';
$email_subject = "New Form Submission";
$email_body = "You have received a new message from the user $fullname.\n".
"Email adress: \n $email".
"Here is the message:\n $message".

$to = "babdulai149@gamil.com";
$headers = "Form: $email_form \r\n";

//send the email
mail($to,$email_subject,$email_body,$headers);

if (isset($_POST['submit'])){   header("Location: index.html")   }

?>