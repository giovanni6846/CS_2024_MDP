<?php
namespace App\Vue;
use App\Utilitaire\Vue_Composant;

class Vue_Menu_Administration extends Vue_Composant
{
    private $idCategorie_utilisateur;

    public function __construct($idCategorie_utilisateur)
    {
        $this->idCategorie_utilisateur = $idCategorie_utilisateur;

    }

    function donneTexte(): string
    {
        switch ($this->idCategorie_utilisateur) {
            case 1:
                return "
             <nav id='menu'>
              <ul id='menu-closed'> 
                <li><a href='?case=Gerer_utilisateur'>Utilisateurs</a></li>
                <li><a href='?case=Gerer_monCompte'>Mon compte</a></li> 
               </ul>
            </nav> 
";
            case 2:
                return "
             <nav id='menu'>
              <ul id='menu-closed'> 
                <li><a href='?case=Gerer_catalogue'>Catalogue</a></li>   
                <li><a href='?case=Gerer_monCompte'>Mon compte</a></li> 
               </ul>
            </nav> 
";

            case 5:
                return "
             <nav id='menu'>
              <ul id='menu-closed'> 
             <li><a href='?case=Gerer_entreprisesPartenaires'>Entreprises partenaires</a></li>
               <li><a href='?case=Gerer_Commande'>Commandes</a></li>
                <li><a href='?case=Gerer_monCompte'>Mon compte</a></li> 
               </ul>
            </nav> 
";
        }
                return "
             <nav id='menu'>
              <ul id='menu-closed'> 
                <li><a href='?case=Gerer_utilisateur'>Utilisateurs</a></li>
                <li><a href='?case=Gerer_catalogue'>Catalogue</a></li>   
             <li><a href='?case=Gerer_entreprisesPartenaires'>Entreprises partenaires</a></li>
               <li><a href='?case=Gerer_Commande'>Commandes</a></li>
            
                <li><a href='?case=Gerer_monCompte'>Mon compte</a></li> 
               </ul>
            </nav> 
";
              
    }
}
