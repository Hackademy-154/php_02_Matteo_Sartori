<?php

                            
// COMPILARE IL FEEDBACK (chi non fa il feedback interrogato lunedì)



// ESERCITAZIONE

// Rivedere la lezione
// Ripetere l’esercizio del controllo password visto a lezione (da soli o rivedendo il video)
// Implementare un metodo che faccia reinserire la password qualora anche una delle regole non fosse rispettate e che, invece, lo interrompa in caso di password accettata
// visualizzare in console quale regola non è stata rispettata
// se le regole sono tutte rispettate dare output visivo all'utente "Password accettata"


// pushare tutto su github php_02_nome_cognome

function controllaPassword($password)
{
    $regole = [
        'Lunghezza minima di 8 caratteri' => strlen($password) >= 8,
        'Deve contenere almeno una lettera maiuscola' => preg_match('/[A-Z]/', $password),
        'Deve contenere almeno una lettera minuscola' => preg_match('/[a-z]/', $password),
        'Deve contenere almeno un numero' => preg_match('/[0-9]/', $password),
        'Deve contenere almeno un carattere speciale' => preg_match('/[\W_]/', $password),
    ];


    $tutteRispettate = true;

    foreach ($regole as $messaggio => $rispettata) {
        if (!$rispettata) {
            echo "<script>console.log('Regola non rispettata: {$messaggio}');</script>";
            $tutteRispettate = false;
        }
    }

    return $tutteRispettate;
}

do {
    
    $password = readline("Inserisci la password: ");
    
    if (controllaPassword($password)) {
        echo "Password accettata\n";
        break;
    } else {
        echo "Password non valida. Riprova.\n";
    }
    
} while (true);
?>