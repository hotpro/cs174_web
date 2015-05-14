#!/usr/bin/php
<?php
$words = array('Малина', 'Клубника', 'Огурец');
$collator = new Collator('ru_RU');
$collator->sort($words);
foreach ($words as $word) {
    print $word . "\n";
}
?>
