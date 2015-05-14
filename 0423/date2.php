#!/usr/bin/php
<?php
date_default_timezone_set('America/Los_Angeles');

$fmt = new IntlDateFormatter('en_US', IntlDateFormatter::FULL,
                             IntlDateFormatter::FULL,
                             'America/Los_Angeles');
$when = new DateTime();
$parts = array('tm_sec' => 56,
        'tm_min' => 34,
        'tm_hour' => 12,
        'tm_mday' => 23,
        'tm_mon' => 3, /* 0 = January */
        'tm_year' => 115); /* 0 = 1900 */

print $fmt->format($when) . "\n";
print $fmt->format($parts) . "\n";
?>
