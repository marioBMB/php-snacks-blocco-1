<?php 


    function stampaRisultati($giornata){

        $risultati = "";

        for ($i = 0; $i < count($giornata); $i++){
            
            $risultati .= "<li>". $giornata[$i][0][0]. " - ". $giornata[$i][1][0]. "|" .$giornata[$i][1][0]. "-" .$giornata[$i][1][1]. "</li>";
        }
    }
    

    $giornataCalendario = [

        [ 
            "Brescia" => 87,
            "Trieste" => 76 
        ],
        [ 
            "Cremona" => "-",
            "Napoli" => "-"
        ],
        [ 
            "Dinamo Sassari" => "-",
            "Virtus Bologna" => "-"
        ],
        [ 
            "Dertona" => 76,
            "Trento" => 50
        ],
        [ 
            "Olimpia Milano" => 91,
            "VL Pesaro" => 57
        ],
        [
            "Fortitudo Bologna" => 67,
            "Brindisi" => 73
        ],
        [
            "Reggiana" => 67,
            "Universo Treviso" => 62
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack A</title>
</head>
<body>


    <ul>

        <?= stampaRisultati($giornataCalendario) ?> 
    </ul>  

</body>
</html>