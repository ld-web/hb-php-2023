<?php
require_once 'functions.php';

$a = 3;
$b = 6;

$somme = sum($a, $b);
var_dump($somme);


$sentence = "Je suis une phrase";
$autreSentence = "Je suis une autre phrase";
$text = "Je suis un texte";
$thirdSentence = "Je suis une troisième phrase";
$eniemeSentence = "Je suis une énième";

$texts = [$sentence, $autreSentence, $eniemeSentence];

$textWithBr = combineTextsWithBrTags(...$texts);

echo textToParagraphOrDiv($textWithBr, 'div');
