<?php

$emailer = new emailer("hasin@pageflakes.com");
$emailer->addRecipients("hasin@somewherein.net");
$emailer->setSubject("Just a Test");
$emailer->setBody("Hi Fucking Hasin, How are you!");
$emailer->sendEmail();


?>
