<?php 

/*This code refreshes the page every 10 seconds*/
$page = $_SERVER['PHP_SELF'];
$sec = "10";
header("Refresh: $sec; url=$page");

$ch = curl_init("BMS URL FOR MOVIE TICKETS");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$text = curl_exec($ch);
$test = strpos($text, "THEATRE NAME / MOVIE NAME");
if ($test==false)
{
    echo "no";
}
else
{
    echo "yes";

$to      = 'RECEIPENT MAIL';
$subject = 'MAIL SUBJECT';
$message = 'MESSAGE IN THE MAIL , BETTER TO HAVE THE BOOKING LINK';
$headers = 'From: SENDER EMAIL' . "\r\n" .
    'Reply-To: SENDER EMAIL' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
}
?>
