#!/usr/bin/php
<?php
$messages = array();
$messages['en_US'] =
    array('FAVORITE' => 'favorite',
            'FRIES' => 'french fries',
            'CANDY' => 'candy',
            'CHIPS' => 'potato chips',
            'EGGPLANT' => 'eggplant');
$messages['en_GB'] =
    array('FAVORITE' => 'favourite',
            'FRIES' => 'chips',
            'CANDY' => 'sweets',
            'CHIPS' => 'crisps',
            'EGGPLANT' => 'aubergine');

$sentence = 'My {0} food is {1}.';

foreach (array('en_US', 'en_GB') as $locale) {
    $favoriteMF = new MessageFormatter($locale, $messages[$locale]['FAVORITE']);
    $candyMF = new MessageFormatter($locale, $messages[$locale]['CANDY']);
    $favorite = $favoriteMF->format(array());
    $candy = $candyMF->format(array());
    print $candy . "\n";
    print $favorite . "\n";
    $sentenceMF = new MessageFormatter($locale, $sentence);
    print $sentenceMF->format(array($favorite, $candy)) . "\n";
}
?>
