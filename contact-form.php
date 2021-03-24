<?php

if (isset($_POST['submit'])) {
	$theMail =$_POST['email'];

    $mailTo = "chibuikemkalu466@gmail.com";
    $header = "From: The Interact Website";
    $txt = "Hi I am a User of the Interact site.\n I would like to subscribe to your monthly newsletter.\n This is my email address".$theMail;
	mail($mailTo, $theMail, $txt);
	header("Location:index.html?mailsend");
}
