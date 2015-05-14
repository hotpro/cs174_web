#!/usr/bin/php
<?php
$template = "{0, spellout}";
$locales  = array('en_GB', 'fr_FR', 'de_DE', 'zh_CN');

print "\n\t";
foreach ($locales as $locale) {
    print $locale . "\t\t";
}
print "\n\n";

for ($i = 0; $i <= 21; $i++) {
    print $i . "\t";

    foreach ($locales as $locale) {
        $msgMF = new MessageFormatter($locale, $template);
        $msg = $msgMF->format(array($i));
        print $msg . "\t";
        if (strlen($msg) < 8) {
            print "\t";
        }
    }

    print "\n";
}
?>
