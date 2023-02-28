<?php

function arrondiAuDemi(float $nombre): float
{
  $result = round($nombre * 2) / 2;
  // echo $result;
  // echo '<br />';
  return $result;
};

arrondiAuDemi(2.45);
arrondiAuDemi(2.75);
arrondiAuDemi(2.37);
arrondiAuDemi(7.4);
arrondiAuDemi(2.7896);
arrondiAuDemi(2.37434);
arrondiAuDemi(999.35468346531);
arrondiAuDemi(313.213525313512);
arrondiAuDemi(313.713525313512);
arrondiAuDemi(313.7453525313512);
arrondiAuDemi(313.755525313512);
