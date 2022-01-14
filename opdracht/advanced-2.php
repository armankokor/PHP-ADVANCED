<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

<?php 
echo "<body style='background-color:".$_POST['achtergrond']."'>";
?>

<?php
    function maakRij($iets, $iets2){
        echo "<tr>";
        echo "<td style='border: ".$_POST['border-dikte']."px solid; color:".$_POST['tekst']."; padding:".$_POST['padding']."px;'>$iets</td>";
        echo "<td style='border: ".$_POST['border-dikte']."px solid; color:".$_POST['tekst']."; padding:".$_POST['padding']."px;'>$iets2</td>";
        echo "</tr>";
    }

    $info1 = array("key"=>"value");
    $info2 = array("naam"=>"arman");
    $info3 = array("leeftijd"=>"16");
    $info4 = array("klas"=>"1D");


    echo "<table style='border:  ".$_POST['border-dikte']."px solid' width='300' cellspacing='0'>";


foreach($info1 as $idk =>$idk2){
    maakRij($idk, $idk2);
}

foreach($info2 as $idk =>$idk2){
    maakRij($idk, $idk2);
}
   
foreach($info3 as $idk =>$idk2){
    maakRij($idk, $idk2);
}

foreach($info4 as $idk =>$idk2){
    maakRij($idk, $idk2);
}
    echo "</table>"

?>
</body>
</html>