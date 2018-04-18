<?php
$blockwords="http,href,www";
if(!empty($_SERVER['REMOTE_ADDR'])&&!empty($_POST)){$_POST['REMOTE_ADDR']=$_SERVER['REMOTE_ADDR'];}if(!empty($blockwords)&&!empty($_POST)){$useBlocks=explode(",",$blockwords);foreach($useBlocks as $blockWord){foreach($_POST as $Name=>$Value){$Value=trim($Value);$Value=strtolower($Value);if(!empty($Value)&&strpos($Value,$blockWord)!==false){exit();}}}}
?>
<?php
$email_to = "billy@strawberrymarketing.com";
$name = $_POST["name"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$comment = $_POST["comment"];




$email_from = "billy@strawberrymarketing.com"; // This email address has to be the same email on the server if using Fasthots server i.e. strawberry server - billy@strawberrymarketing.com
$message = $_POST["message"];
$email_subject = "Newhaven Query";
$headers =
"From: $email_from .\n";
"Reply-To: $email_from .\n";
$message = 
"Name: ". $name . 
"\r\nTelephone Number: " . $tel . 
"\r\nEmail Address: " . $email .
"\r\nQuery: " . $comment;

ini_set("sendmail_from", $email_from);
$sent = mail($email_to, $email_subject, $message, $headers, "-f" .$email_from);
if ($sent)
{
header("Location: http://www.strawberryproofing.co.uk/newhaven_marina/thank_you.html");  // Takes you to the thank you page
} else {
echo "There has been an error sending your query. Please try later.";
}
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}
function show_error($myError)
{
?>







<?php echo $myError; ?>


<?php
exit();
}
?>
