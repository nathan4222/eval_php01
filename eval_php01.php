<?php
/*
Evaluation PHP 01

Consignes: respecter les coding standards PSR-1 et PSR-12
Faire un fork du repo d'origine
Cloner votre repo sur votre machine
Et mettre à jour votre repo pour être corrigé (push)

1 - écrire une fonction qui détermine si une lettre passée en paramètre
est une voyelle.
Si la lettre est un voyelle retourner true sinon retourner false
Detecter les voyelles: "aeiou" en majuscules ou en minuscules.
Ne pas tenir compte des accents.

prototype de la fonction:
isVoyelle($lettre) : boolean

Tester votre fonction avec les paramètres suivants:
'a', 'b', 'c', 'A', 'E', true, false, 0, 1, 2 et 'bonjour'




2 - écrire une fonction qui supprime les voyelles d'une chaine de caractère.
La fonction retourne la chaine d'origine sans les voyelles.
Utiliser la fonction isVoyelle() écrite précédement.

prototype de la fonction:
supprimerVoyelles($chaine) : string
Tester votre fonction avec les paramètres suivants:
'bonjour', 'hello world', 'eau', 0, 1, 2, 42, true, false




3 - Généralisation des fonctions précédentes: écrire une fonction
qui supprime les lettres passées en paramètres dans
une chaine passée en paramètre.
retourner la chaine sans les lettres supprimer.

prototype de la fonction:
supprimerLettres($chaine, $lettres_a_supprimer) : string

Pour écrire votre fonction utiliser une fonction permettant
de détecter les lettres à supprimer:
isLettreASupprimer($lettre, $lettres_a_supprimer) : boolean

tester votre fonction avec les paramètres suivants pour la chaine:
'bonjour', 'hello world', 'eau', 0, 1, 2, 42, true, false
et les paramètres suivants pour les lettres à supprimer:
'0123', 'eau' et 'hlwrd'
Tester toutes les combinaisons de paramètres possibles.



4 - Ré-écrire la fonction supprimerVoyelles() en utilisant les fonctions
écrites dans le point 3.
Conserver la version précédente de la fonction supprimerVoyelles() pour correction
*/

