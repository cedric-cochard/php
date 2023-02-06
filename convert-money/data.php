<?php 

function getConvertInDollars ($amountToConvert) {
   $amountInDollars = $amountToConvert * 1.07175;
   return number_format($amountInDollars, 2, '.', '' );
};
$dollars = getConvertInDollars(15);

$numberToConvert = filter_input(INPUT_GET, "number", FILTER_VALIDATE_FLOAT);


if ($numberToConvert != null && $numberToConvert != false) {
   $dollars = getConvertInDollars($numberToConvert);
   echo "<p>Le montant de $numberToConvert € donne $dollars $";
};
