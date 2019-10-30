<?php
/*
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
*/

function isVoyelle ($lettre) {
    $lettre = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($lettre, "", "Hello World of PHP");
}
