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
for($loop = 0; $loop < 18; $loop++){
	echo "<li> ik ben $loop jaar, dus ik heb geen stemrecht. </li>";
}
for($loop = 18; $loop < 19; $loop++){
	echo " <li>Ik ben $loop jaar oud dus ik heb stemrecht.</li>";
}
echo "</ul>";
?>
</body>
</html>