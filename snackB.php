<?php 

    /*
        Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
        che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
        Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”.
    */

    $resultMessage = "";


    function checkName($string, $minChars){

       return count(trim($string)) > $minChars;
    }

    function checkMail($string){

        return strpos($string, "@") > strpos($string, ".");
    }

    function checkAge($number){

        return int_val($number) > 0;
    }

    function checkFields($fields){
        
        $name = $fields['name'];
        $mail = $fields['mail'];
        $age = $fields['age'];

        $validName = checkName($name, 3);
        $validMail = checkName($mail);
        $validAge = checkName($age);
        $errors = [];
    
        if (!$validName){ array_push($errors, $$name); }
        if (!$validMail){ array_push($errors, $$mail); }
        if (!$validAge){ array_push($errors, $$age); }

        if (count($errors) == 0){ return true; }
        return $errors;
    }

    function printMessage($errors){

        $successMessage = "Accesso riuscito!";
        
        if (!$errors){ 
            $resultMessage = $successMessage;
            return $successMessage; 
        }

        $errorMessage = "Accesso negato: <br> <ul>";
        if (in_array($errors, 'name')){ $errorMessage += " <li> Il nome deve avere almeno 3 caratteri </li>"; }
        if (in_array($errors, 'mail')){  $errorMessage += " <li> L'email deve avere un punto e una chiocciola </li>"; } 
        if (in_array($errors, 'age')){ $errorMessage += " <li> L'età deve essere un numero intero maggiore di 0 </li>"; }

        $errorMessage += "</ul>";
        return $errorMessage;
    }

    function submit(){

        printMessage(checkFields($_GET));
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <div class="message">
        <?= $resultMessage ?>
    </div>

    <form action="submit()" method="GET">

        <input type="text" name='name' placeholder="Inserisci nome">
        <input type="text" name='mail' placeholder="Inserisci indirizzo email">
        <input type="number" name='age' placeholder="Inserisci indirizzo email">

    </form>
<body>
    

</body>
</html>