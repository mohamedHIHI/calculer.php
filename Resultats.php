<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
 
    $num1 = isset($_POST['num1']) ? floatval($_POST['num1']) : 0;
    $num2 = isset($_POST['num2']) ? floatval($_POST['num2']) : 0;
    $operation = isset($_POST['operation']) ? $_POST['operation'] : '';

    $resultat = null;
    $erreur = null;
    $symbole = '';
  
    switch ($operation) {
        case 'add':
            $resultat = $num1 + $num2;
            $symbole = '+';
            break;
        case 'subtract':
            $resultat = $num1 - $num2;
            $symbole = '-';
            break;
        case 'multiply':
            $resultat = $num1 * $num2;
            $symbole = '×';
            break;
        case 'divide':
            if ($num2 != 0) {
                $resultat = $num1 / $num2;
                $symbole = '÷';
            } else {
                $erreur = "Erreur : Division par zéro impossible !";
            }
            break;
        default:
            $erreur = "Opération non valide !";
    }

?>