<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


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
  

    ?>
    
    </pre>
    <?php
    foreach($LastPoll as $poll) : ?>
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