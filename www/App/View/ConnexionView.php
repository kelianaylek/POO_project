<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body>
    <div class="wrapper">
        <h1>Ecran de connexion</h1>
        <form action= <?php //echo ROOT."/app/Controller/ConnexionControler" ; ?> method="POST">
        <!-- mail -->
        <label for="mail">Votre mail</label>    
        <input type="mail" name="mail">
        <!-- password -->
        <label for="pass">Votre password</label>    
        <input type="password" name="pass">

        <input type="submit" name="submit" value="Se connecter" />
    
    </form>
    </div>
</body>
</html>