<?php

function getThePageName(){
  return basename($_SERVER['PHP_SELF']);
}


function convertAndFormat($inputDate, $userFormat, $outputStringFormat) {
  $myDateTime = DateTime::createFromFormat($userFormat, $inputDate);
  $newDateString = $myDateTime->format('m/d/Y H:i:s');
  $date = strtotime($newDateString);
  return date($outputStringFormat, $date);
}

function convertDateToFormat($date,$format) {
  return  date_format(date_create($date), $format);
}
?>
