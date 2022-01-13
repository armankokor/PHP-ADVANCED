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
function kleur($kleuren) {
    echo "<div style=\"color:".$kleuren."; \">dit is de kleur $kleuren</div>";
}

kleur("#FF0000");
kleur("green");
kleur("#0000FF");
kleur("yellow");

?>

</body>