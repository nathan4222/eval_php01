<?php

function isVoyelle ($lettre) {
    if (($lettre == 'a')||($lettre == 'e')||($lettre == 'i')||($lettre == 'o')
    ||($lettre == 'u')||($lettre == 'y')||($lettre == 'A')||($lettre == 'E')
    ||($lettre == 'I')||($lettre == 'O')
    ||($lettre == 'U')||($lettre == 'Y')) {
        echo "True";
    }else {
        echo "False";
    }
}


function supprimerVoyelles($chaine)
{
 $chaine_reponse = "";
 for($i=0; $i<strlen($chaine); $i++) {
   $lettre = $chaine[$i];
   if (!isVoyelle($lettre)) {
     $chaine_reponse = $chaine_reponse . $lettre;
   }
 }
 return($chaine_reponse);
}