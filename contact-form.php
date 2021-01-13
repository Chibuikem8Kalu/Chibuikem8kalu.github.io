<?php

if (isset($_POST['submit'])) {
	$theMail =$_POST['email'];

    $mailTo = "chibuikemkalu466@gmail.com";
    $header = "From: The Interact Website";
    $txt = "You have received a new subscription to your newsletter\n".$mailTo;
	mail($mailTo, $theMail, $txt);
	header("Location:index.html?mailsend");
}
