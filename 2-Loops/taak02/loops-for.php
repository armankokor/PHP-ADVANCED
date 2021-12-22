<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "<ul>";
for($leeftijd = 0; $leeftijd < 18; $leeftijd++){
	echo "<li> ik ben $leeftijd jaar, dus ik heb geen stemrecht. </li>";
}
for($loop = 18; $leeftijd < 19; $leeftijd++){
	echo " <li>Ik ben $leeftijd jaar oud dus ik heb stemrecht.</li>";
}
echo "</ul>";
?>
</body>
</html>
