<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Titre du sondage :</h1>

<hr>
<table>
        <thead>
            <tr>
                <th>Titre du sondage</th>
                <th>Choix numéro 1</th>
                <th>Choix numéro 2</th>
                <th>Temps restant</th>
            </tr>
        </thead>
        <tbody>
         
       

    <pre>
    <?php
    // var_dump($AllPolls);
    ?>
    </pre>
    <?php
    foreach($AllPolls as $poll) : ?>
        <tr>
            <td><?= $poll->poll_title ?></td>
            <td><?= $poll->poll_answer1 ?></td>
            <td><?= $poll->poll_answer2 ?></td>
            <td><?= $poll->poll_limit ?></td>

        </tr>
    <?php endforeach; ?>
    



        </tbody>
    </table>




</body>
</html>