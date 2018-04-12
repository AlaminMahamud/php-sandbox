<?php

if($month == 'september' ||
   $month == 'april'     ||
   $month == 'june'      ||
   $month == 'november') {
  return 30;
 }

mail(
  "postmaster@example.foo",
  "My Subject",
  $message_body,
  "From: George Scholssnagle <george@omniti.com>\r\n"
);
?>
