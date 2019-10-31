<?php

function isVoyelle($lettre)
{
    $voyelle= false;

    if (is_string($lettre) && (strlen($lettre)==1)) {
        
        $lettre = strtoupper($lettre);

        if (
           ($lettre == "A") ||
           ($lettre == "E") ||
           ($lettre == "I") ||
           ($lettre == "O") ||
           ($lettre == "U") ||
           ($lettre == "Y") 
        ) {
        $voyelle = true; 
        }
    } else { 
         echo "erreur\n";

    }
    return($voyelle);
}


function testvoyelle($lettre)
{
    if (isVoyelle($lettre)) {
          echo "$lettre est une voyelle\n";
    }   else {
            echo "$lettre n'est pas une voyelle\n";
    }

}

function supprimervoyelle($chaine)
{

    $voyelle= false;

    if (is_string($lettre) && (strlen($lettre)==1)) {
        
        $lettre = strtoupper($lettre);

        if (
           ($$chaine == "A") ||
           ($$chaine == "E") ||
           ($$chaine == "I") ||
           ($$chaine == "O") ||
           ($$chaine == "U") ||
           ($$chaine == "Y") 
        ) {
        $chaine_retour = ""; 
        }
    }    
return ($chaine_retour);


}
















