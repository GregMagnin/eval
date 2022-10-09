<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'inscription</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<h1>Inscrivez vous !</h1>

<form action="../controllers/registerController.php">
<input type="text" name="username" id="username" placeholder="Nom d'utilisateur" required="required">
<input type="text" name="email" id="email" placeholder="Email" required="required">
<input type="password" name="password" id="password" placeholder="Mot de passe" required="required">
<input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirmez le mot de passe" required="required">
<button type="submit" value="S'inscrire">S'inscrire</button> 
</form>

    
</body>
</html>