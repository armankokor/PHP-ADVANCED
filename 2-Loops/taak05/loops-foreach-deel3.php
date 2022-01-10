<?php
$student  = array(
  "voornaam" => "Jan",
  "achternaam"  => "Janssen",
  "klas"        => "9A",
  "Leeftijd"    => 17,
  "Woonplaats"  => "Amstelveen"
);
foreach($student as $x => $val) {
    echo "$x = $val<br>";
  }
?>
