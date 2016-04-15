
<!---<img class="img-single" align="left" src="/public/img/quick.png" width="55">

<form name="myemailform" method="post" action="form-to-email.php">
<div>
        <label for="name">Name:</label>
        <input type="text" name= "name" id="name" />
    </div>
    <div>
        <label for="email">E-mail:</label>
        <input type="text" name= "email" id="email" />
    </div>
    <div>
        <label for="message">Message:</label>
        <textarea id="message" name="message"></textarea>
    </div>

    <div class="button">
        <input type="submit" value="Send Form">
    </div>---!>






</form> <--!>



<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

//Validate first
if(empty($name)||empty($visitor_email))
{
    echo "Name and email are mandatory!";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

$email_from = 'tothzit@gmail.com';//<== update the email address
$email_subject = "New Form submission";
$email_body = "You have received a new message from the user $name.\n".
    "Here is the message:\n $message".

$to = "tothzit@gmail.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('/thank-you/');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}

?>
