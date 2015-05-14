#!/usr/bin/php
<?php
date_default_timezone_set('America/Los_Angeles');

$when = new DateTime('now', new DateTimeZone('America/Los_Angeles'));
print IntlDateFormatter::formatObject($when, 'eeee dd MMMM y', 'es_ES') . "\n";
print IntlDateFormatter::formatObject($when, IntlDateFormatter::FULL, 'fr_FR') . "\n";
$formats = array(IntlDateFormatter::FULL, IntlDateFormatter::SHORT);
print IntlDateFormatter::formatObject($when, $formats, 'de_DE') . "\n";
?>
