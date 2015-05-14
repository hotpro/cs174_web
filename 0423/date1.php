#!/usr/bin/php
<?php
date_default_timezone_set('America/Los_Angeles');

$when = new DateTime();
$message = "It is {0,time,short} on {0,date,medium}.";
$fmt = new MessageFormatter('en_US', $message);
print $fmt->format(array($when)) . "\n";
?>
