<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Envoi d'un message par formulaire</title>
</head>

<body>
<?php
$retour = mail('morgangoncalves@hotmail.com', $_POST['subject'], $_POST['message'], $_POST['mail']);
if ($retour) {
    header('Location: https://morgan-portfolio.site');
    exit();
}
?>
</body>
</html>
