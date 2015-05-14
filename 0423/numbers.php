#!/usr/bin/php
<?php
$x = 5327;
$y = 98;
$message = '{0,number}/{1,number} = {2,number}';
$args = array($x, $y, $x/$y);
$us = new MessageFormatter('en_US',$message);
$fr = new MessageFormatter('fr_FR',$message);
print $us->format($args) . "\n";
print $fr->format($args) . "\n";
?>
