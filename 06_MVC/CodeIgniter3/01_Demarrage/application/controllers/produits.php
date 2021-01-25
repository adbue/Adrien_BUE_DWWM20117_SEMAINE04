<?php

// application/controllers/Produits.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produits extends CI_Controller 
{

    public function liste()
{
    // Déclaration du tableau associatif à tranmettre à la vue
    $aView = array();

    // Dans le tableau, on créé une donnée 'prénom' qui a pour valeur 'Dave'    
    $aView["prenom"] = "Dave";  
    // Exercice 1  =  Ajout du nom de famille
    $aView["nom"] = "Loper";
    // Exercice 2 = Liste de produits, tableau associatif $key = brands(marques) et $value= les valeurs incluses dans le tableau
    $aView["brands"] = array("Aramis", "Athos", "Clatronic", "Camping", "Green");   

    // On passe le tableau en second argument de la méthode 
    $this->load->view('liste', $aView);
}
}
