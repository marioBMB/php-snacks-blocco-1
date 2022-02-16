
#Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

<?php 
    
    $nums = "";
    $showForm = true;

    function generateRandArr($size){

        $arr = array($size);
        $randNum;

        for ($i = 0; $i < $size; $i++){

            $randNum = rand(1, 100);

            while (in_array($arr, $randNumber)){
                $randNum = rand(1, 100);
            }
            array_push($arr, $randNum);
        }
    }

    function submit(){

       $randArrNums = generateRandArr($_GET('size'));
       $nums = print_arr($randArrNums);
       $showForm = false;
    }

?>


<!DOCTYPE html>

<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Generatore di numeri random</title>
        <link rel="stylesheet" href="">
    </head>

    <body>
        <?php if ($showForm): ?>
            <form action="submit()" method="GET">

                <input type="number" name='size'  placeholder="Inserisci quantità di numeri casuali">
                <input type="submit" value='Invia'>
            </form>
        <?php else:  ?>
            <div>
                I numeri sono: <?= $nums ?>
            </div>

        <?php endif; ?>
        
    </body>
</html>