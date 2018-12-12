<?php

/* SCRIPT FRONTAL AFFICHAGE DE CAPTCHA
* AFFICHER UNE IMAGE GÉNÉRÉE EN PHP */
header( 'content-type: text/html; charset=utf-8' );
echo "Veuillez saisir le code de sécurité";

echo "<img src='script-captchas.php' alt='captchas' />";

if(isset($_REQUEST['envoyer']))

?>

<!doctype html>
<html>
<head>
<meta charset='utf-8'>
</head>  
<body>
<form action="script-captchas.php" method=POST>
			<input type-required="text" name="captcha">
			<input type="submit" id="Envoyer">
</form>
</body>
</html>
