<?php

$nom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['message'];

?>

<!DOCTYPE html>
<html>
<head>
<title>Message reçu</title>
</head>

<body>

<h2>Message reçu avec succès</h2>

<p><strong>Nom :</strong> <?php echo $nom; ?></p>

<p><strong>Email :</strong> <?php echo $email; ?></p>

<p><strong>Message :</strong> <?php echo $message; ?></p>

<p>✅ Nous vous recevons 5/5</p>

</body>

</html>