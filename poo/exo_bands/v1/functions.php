<?php
require_once __DIR__ . '/classes/Style.php';
require_once __DIR__ . '/classes/StylesDb.php';

function findBandStyle(int $styleId, StylesDb $stylesDb): Style
{
  foreach ($stylesDb->getStyles() as $style) {
    if ($style->getId() === $styleId) {
      return $style;
    }
  }
}
