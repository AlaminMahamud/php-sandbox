<?php

include("class.emailer.php");
include("class.extendedemailer.php");
include("class.htmlemailer.php");

$emailer = new Emailer("someone@example.com");
$extendedemailer = new ExtendedEmailer("");
$htmlemailer = new HtmlEmailer("");

if($extendedemailer instanceof emailer)
  echo "Extended Emailer is derived from Emailer";

if($htmlemailer instanceof extendedEmailer)
  echo "bla bla";
?>
