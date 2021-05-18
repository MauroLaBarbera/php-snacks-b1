<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <?php
    /**
     * PHP Snack 1:
     * Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
     * Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
     * Stampiamo a schermo tutte le partite con questo schema:
     * Olimpia Milano - Cantù | 55-60
     */
    
     $matches = [
         [
             'casa' => 'Lakers',
             'ospite' => 'Chicago Bulls',
             'punti_casa' => 77,
             'punti_ospite' => 74
         ],
         [
             'casa' => 'Olimpia Milano',
             'ospite' => 'Cantù',
             'punti_casa' => 55,
             'punti_ospite' => 60
         ],
         [
             'casa' => 'Boston Celtics',
             'ospite' => 'New York Knicks',
             'punti_casa' => 80,
             'punti_ospite' => 76
         ],
         [
             'casa' => 'Clevelands Cavaliers',
             'ospite' => 'Miami Heat',
             'punti_casa' => 60,
             'punti_ospite' => 68
         ],
         [
             'casa' => 'Virtus Pallacanestro Bologna',
             'ospite' => 'Pallacanestro Varese',
             'punti_casa' => 48,
             'punti_ospite' => 66
         ],
     ];

    ?>

     <ul>
        <?php for($i = 0; $i < count($matches); $i++) : ?>
        <li>
        <h2> <?php echo $matches[$i]['casa']; ?> - <?php echo $matches[$i]['ospite']; ?> | <?php echo $matches[$i]['punti_casa']; ?> - <?php echo $matches[$i]['punti_ospite']; ?></h2>
        </li>
        <?php endfor; ?>
     </ul>



    <?php
     /* 
     PHP Snack 2:
    Passare come parametri GET (query string) name, mail e age
    verificare (cercando i metodi che non
    conosciamo nella documentazione) che:
    1. name sia più lungo di 3 caratteri
    2. che mail contenga un punto e una chiocciola
    3. che age sia un numero.
    Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
    */

    


    ?>

    <?php 
     /*
    PHP Snack 3 Bonus (solo come bonus e solo se completati i due precedenti)
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
    */
    
    ?>

</body>
</html>