<!DOCTYPE html>
<?php
$variable1=" PHP 7";
?>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
echo "<title>Une page pleine de scripts PHP</title>";
?>
</head>
<body>
<script language="php">
echo"<h1>BONJOUR A TOUS </h1>";
</script>
<?php
echo "<h2> Titre écrit par PHP</h2>";
$variable2=" MySQL";
?>
<p>Vous allez découvrir <?= $variable1 ?> </p>
<?php
echo "<h2> Bonjour de $variable1</h2>";
?>
<p>Utilisation de variables PHP<br />Vous allez découvrir également
<?php
echo $variable2
?>
</p>
<?= "<div><big>Bonjour de $variable2 </big></div>" ?>
</body>
</html>