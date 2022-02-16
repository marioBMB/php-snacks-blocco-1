/* Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
 Stampare Nome, Cognome e la media dei voti di ogni alunno. */

<?php   

    $students = [

        [
            "nome" => "Alessio",
            "cognome" => "Tomei",
            "voti" => [10, 8, 9, 7, 8, 8, 10]
        ],
        [
            "nome" => "Stephan",
            "cognome" => "Sirghie",
            "voti" => [10, 7, 9, 6, 9, 7, 8]
        ],
        [
            "nome" => "Milan",
            "cognome" => "Stojkovic",
            "voti" => [10, 9, 8, 8, 7, 7, 6]
        ],
        [
            "nome" => "Simone",
            "cognome" => "Massaro",
            "voti" => [7, 7, 8, 8, 9, 9, 10]
        ],
        [
            "nome" => "Fabio",
            "cognome" => "Losa",
            "voti" => [8, 7, 8, 7, 7, 9, 9]
        ]
    ];


    function avg(array $numbers){

        $i = 0;

        for ($i; $i < count($numbers); $i++){

            $sum += $numbers[$i];
        }
        return $sum / $i;
    }



    function printStudents(array $students) {

        for ($i = 0; $i < count($students); $i++){

            echo ("Nome: $students[$i]['nome']" . PHP_EOL . "Cognome: $students[$i]['cognome']" . PHP_EOL . "Media: avg($students[$i]['voti'])");
        }
    }

    
?>