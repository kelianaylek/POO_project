<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Mes amis :</h1>
    <!-- <?php
    foreach($friendsList as $user_friend) : ?>
        <tr>
            <td><?= $user_friend->friend_id ?></td>

        </tr>
    <?php endforeach; ?> -->

    <?php
    foreach($arrayOfFriendsNameArrays as $user_friend) : ?>
        <tr>
            <td><?= $user_friend[0]->user_name ?></td>

        </tr>
    <?php endforeach; ?>



    <h2>Ajouter un ami</h2>

    <form action="" method="POST">
    <input type="text" name="researchedFriend" placeholder="Rechercher un utilisateur">
    <button type="submit" name="addFriend">Ajouter comme ami</button>
    </form>

    <h2>Retirer un ami</h2>

    <form action="" method="POST">
    <input type="text" name="deletedFriend" placeholder="Rechercher un ami">
    <button type="submit" name="supprFriend">Supprimer cet ami</button>
    </form>

    


</body>
</html>