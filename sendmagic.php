<?php
require_once('config.php');
include 'sendgrid/sendgrid-php/SendGrid_loader.php';

if (!isset($_POST["save"]) || $_POST["save"] != "magicmail") {  
    header("Location: index.php"); exit;  
} 	


//get parameters
$subject = $_POST["subject"];
$to = $_POST["to"];
$body =$_POST["body"];
$from ="demo@magicmail.io";

$urlbody = urlencode($body);

//check parameters
if(empty($subject))
   $error = 'You must enter a subject';
else if(empty($to))
   $error = 'You must enter a to address';
else if(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $to))
   $error = 'You must enter a valid email address';
else if(empty($body))
   $error = 'You must enter in a body message';

if (isset($error)) {  
    header('Location: index.php?e='.urlencode($error)); exit;  
}  
 
//Get unique emailID
$emailID = uniqid();

//convert body to image
$imageUrl= file_get_contents("http://api.img4me.com/?text=".$urlbody."&font=arial&fcolor=000000&size=10&bcolor=FFFFFF&type=png");


$imgName = $emailID.".png";
file_put_contents('img/'.$imgName, file_get_contents($imageUrl));

//html body to show
$htmlbody = "<img src=\"http://magicmail.io/img/".$imgName."\" />";

$sendgrid = new SendGrid($config['sendgrid']['api_user'], $config['sendgrid']['api_key']);

                             $mail = new SendGrid\Mail();


                             $mail->
                             addTo($to)->
                             setFrom($from)->
                             setSubject($subject)->
			     addUniqueArgument("filename", $imgName)->
                             setText($htmlbody)->
                             setHtml($htmlbody);
                             

                             $sendgrid->smtp->send($mail);



//Success Message
// send the user back to the form  
header('Location: index.php?s='.urlencode('We just sent your vanishing email.')); exit;  
?>
