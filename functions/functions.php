<?php
function sum(int $x, int $y): int
{
    $result = $x + $y;
    return $result;
}

// Fonction qui prendra un texte en paramètre
// et retournera le même texte encadré par des balises p
// transformToParagraph
// textToParagraph
function textToParagraph(string $text): string
{
    return "<p>$text</p>";
}

// Fonction qui prend des textes
// et les retourne en une seule chaîne de caractères
// séparés par des balises <br />
function combineTextsWithBrTags(string ...$texts): string
{
    // return implode("<br />", $texts);

    $result = '';

    for ($i = 0; $i < count($texts); $i++) {
        $result .= $texts[$i];
        if ($i < count($texts) - 1) {
            $result .= "<br />";
        }
    }

    return $result;
}
