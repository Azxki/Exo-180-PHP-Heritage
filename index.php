<?php

/**
 * 1. Créez une classe Habitation, elle contiendra les propriétés:
 *    - pays ( string )
 *    - ville ( string )
 *    - code postal ( entier ou string )
 *    - chambres ( entier )
 *    - pièces ( entier )
 *
 * Définissez tous les setters et les getters.
 *
 *
 *
 * 2. Créez une classe Maison qui étend de Habitation, elle contiendra les propriétés:
 *    - jardin ( booleen )
 *    - etages ( entier )
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 3. Créez une classe Appartement qui étend de habitation, elle contiendra les propriétés:
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 4. Créez deux instances de Maison et invoquez toutes les méthodes définies, sauf les setters ( dans index.php ).
 *
 *
 *
 * 5. Créez une instance de Appartement et invoquez toutes les méthodes définies, y compris les setters ( dans index.php ).
 */

require "./classes/Habitation.php";
require "./classes/Appartement.php";
require "./classes/Maison.php";

$maison = new Maison('France', 'Bordeaux', 33000, 3,
    5, false, 2, false);

echo 'La maison : <br><br>';
echo 'Le pays : ' . $maison->getPays() . '<br>';
echo 'La ville : ' . $maison->getVille() . '<br>';
echo 'Le code postal : ' . $maison->getPostal() . '<br>';
echo 'Les chambres : ' . $maison->getChambres() . '<br>';
echo 'Les pièces : ' . $maison->getPieces() . '<br>';
echo 'Le jardin : ' . $maison->getJardin() . '<br>';
echo 'Les étages : ' . $maison->getEtages() . '<br>';
echo 'Le garage : ' . $maison->getGarage() . '<br><br><br><br>';

$maison = new Appartement('France', 'Paris', 75002, 5,
    7, true);

echo 'L\'appartement : <br><br>';
echo 'Le pays : ' . $maison->getPays() . '<br>';
echo 'La ville : ' . $maison->getVille() . '<br>';
echo 'Le code postal : ' . $maison->getPostal() . '<br>';
echo 'Les chambres : ' . $maison->getChambres() . '<br>';
echo 'Les pièces : ' . $maison->getPieces() . '<br>';
echo 'Le garage : ' . $maison->getGarage() . '<br>';