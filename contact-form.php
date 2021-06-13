<?php

if (isset($_POST['submit'])) {
	$theMail =$_POST['email'];

    $mailTo = "chibuikemkalu466@gmail.com";
    $header = "From: The Interact Website";
    $txt = "Hi, I am a user of the Interact site. I would like to subscribe to your monthly newsletter.\n This is my email address".$theMail;
	mail($mailTo, $theMail, $txt);
	header("Location:index.html?mailsend");
}
