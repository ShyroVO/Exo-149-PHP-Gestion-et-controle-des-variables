<?php

// En utilisant toutes les fonctions que nous venons de voir.

/**
 * 1. Vérifiez si cette variable est vide, si c'est le cas, affichez vide si non affichez pas vide.
 */
$var = 0;
// TODO votre code ici.
if (trim($var) == false){
    echo "Variable vide";
}
else{
    echo "Variable non vide";
}



/**
 * 2. Détruisez la variable déclarée, tentez de l'afficher ensuite en utilisant un print_r.
 */
$eraseMe = "Please erase me !";
// TODO votre code ici.
unset($eraseMe);

/**
 * 3. Déclarez vous même un tableau et utilisez var_dump pour afficher toutes les informations de debug.
 */
// TODO votre code ici.
echo "<br>";
$monTab = ["Haflinger", "KWPN", "Fjord"];
var_dump($monTab);

/**
 * 4. Faites la même chose avec le même tableau, mais pour la méthode print_r.
 */
// TODO votre code ici.
echo "<br>";
print_r($monTab);

/**
 * 5. A l'aide de la méthode isset, testez si la clé du tableau associatif 'doNotExists' existe ( SANS TOUCHER AU TABLEAU )
 *    Si c'est le cas, affichez le message 'Existe', si ce n'est pas le cas,
 * affichez le message 'Existe pas'.
 */
$tab = ["test" => true, "name" => "Doe", "age" => 32];
// TODO Votre code ici.
echo "<br><br>";
if (isset($tab['doNotExists'])){
    echo "Existe";
}
else {
    echo "Existe pas";
}

/**
 * 6. Créez une variable contenant:
 *    - un booléen
 *    - un nombre entier
 *    - un nombre flottant ( à virgule )
 *    - une chaîne de caractère.
 *
 * Créez une fonction qui prend en paramètre une simple variable, cette fonction doit tester le type du contenu de la variable
 * et afficher le texte "La variable passé en paramètre est de type: TYPE".
 *
 * exemple: funct maFunct(monparam){
 *              si monparam EST boolean {
 *                  afficher -> Ma variable est de type: boolean
 *              }
 *              SI monparam EST ENTIER...
 *              SI...
 *              SI...
 *          }
 * Passez toutes les variables créées précédemment dans cette fonction.
 */

// TODO votre code ici.
echo "<br><br>";
$monTableau = [true, 13, 4.9, "Text"];

foreach ($monTableau as $value){
    echo gettype($value) . " / ";
}
echo "<br>";

function truc ($param){
    if (is_bool($param) === true){
        echo $param . " est un booléen. <br>";
    }
    else if (is_int($param) === true){
        echo $param . " est un nombre entier. <br>";
    }
    else if (is_float($param) === true){
        echo $param . " est un nombre decimal. <br>";
    }
    else if (is_string($param) === true){
        echo $param . " est une chaîne de caractères. <br>";
    }
    else {
        echo $param . " n'est pas reconus <br>";
    }
}

truc($monTableau[0]);
truc($monTableau[1]);
truc($monTableau[2]);
truc($monTableau[3]);