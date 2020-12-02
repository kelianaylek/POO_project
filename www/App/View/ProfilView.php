<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;500&display=swap" rel="stylesheet">
    
</head>
<body>
    <div class="wrapper">
        <h1>Changez vos informations</h1>
        <form action="" method="POST">
            <label for="username">New username</label>
            <input type="text" name="newUsername" placeholder="<?=$user[0]->user_name;?>">
            <label for="password">New mdp</label>
            <input type="password" name="newPassword">
            <label for="confirmPassword">Confirm new mdp</label>
            <input type="password" name="newPasswordConfirmed" >

            <button type="submit" name="submitProfilChanges">Valider</button>
        </form>
        <a href="?page=main" class="returnhome">Retour à l'accueil</a>
    </div>
</body>
</html>