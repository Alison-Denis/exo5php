<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>PhpPart1Exo5</title>
</head>

<body>
<?php
$age = NULL;
?>

<p>Voici le type de ma variable âge : <?php gettype($age) ?> .</p>
<p>Ci dessous ma variable devient mon âge véritablement vrai :</p>
<?= $age = 23;?>

</body>
</html>
