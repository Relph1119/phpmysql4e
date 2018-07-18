<?php

//create short variable names
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$feedback = trim($_POST['feedback']);




//Change the $toaddress if the criteria are met
/*if (strstr($feedback, 'shop'))
    $toaddress = 'retail@example.com';
elseif (strstr($feedback, 'delivery'))
    $toaddress = 'fulfillment@example.com';
elseif (strstr($feedback, 'bill'))
    $toaddress = 'accounts@example.com';*/

if (!eregi( '^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$', $email)) {
    echo "<p>That is not a valid email address.</p>" .
        "<p>Please return to the previous page and try again.</p>";
    exit;
}
//set up some static information
$toaddress = "feedback@example.com";
if (eregi('shop|customer service|retail', $feedback)){
    $toaddress = "retail@example.com";
}elseif (eregi( 'deliver|fulfill', $feedback)) {
    $toaddress = 'fulfillment@example.com';
}elseif (eregi( 'bill|account', $feedback)) {
    $toaddress = 'accounts@example.com';
}
if (eregi('bigcustomer\.com', $email)) {
    $toaddress = 'bob@example.com';
}



$subject = "Feedback from web site";

$mailcontent = "Customer name: ".$name."\n".
			   "Customer email: ".$email."\n".
               "Customer comments:\n".$feedback."\n";

$fromaddress = "From: webserver@example.com";

//invoke mail() function to send mail
mail($toaddress, $subject, $mailcontent, $fromaddress);

?>
<html>
<head>
<title>Bob's Auto Parts - Feedback Submitted</title>
</head>
<body>
<h1>Feedback submitted</h1>
<p>Your feedback (shown below) has been sent.</p>
<p><?php echo nl2br($mailcontent); ?> </p>
</body>
</html>
