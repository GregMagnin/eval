<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Connectez vous !</h1>

<form action="../controllers/loginController.php">
<input type="text" name="username" id="username" placeholder="Nom d'utilisateur" required="required">
<input type="password" name="password" id="password" placeholder="Mot de passe" required="required">
<input type="password" name="confirmPassword" id="confirmPassword" placeholder="Confirmez le mot de passe" required="required">
<button type="submit" value="Se connecter">Se connecter</button> 
</form>
    
</body>
</html>