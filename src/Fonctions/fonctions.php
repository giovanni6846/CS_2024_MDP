<?php
namespace App\Fonctions;
    function Redirect_Self_URL():void{
        unset($_REQUEST);
        header("Location: ".$_SERVER['PHP_SELF']);
        exit;
    }

function GenereMDP($nbChar) :string{

    return "secret";
}

function CalculComplexiteMdp($mdp) :int
{
    $longueur = strlen($mdp);
    $base = 0;
    $bit = 0;
    $contientMajuscule = preg_match('/[A-Z]/', $mdp);
    $contientMinuscule = preg_match('/[a-z]/', $mdp);
    $contientChiffre = preg_match('/[0-9]/', $mdp);
    $contientSpecial = preg_match('/[\W_]/', $mdp);
    if ($contientMinuscule == false and $contientChiffre == true and $contientSpecial == false and $contientMajuscule == false) {
        $base = 10;
    } else if ($contientMinuscule == true and $contientChiffre == false and $contientSpecial == false and $contientMajuscule == false) {
        $base = 26;
    } else if ($contientMinuscule == true and $contientChiffre == true and $contientSpecial == false and $contientMajuscule == false) {
        $base = 36;
    } else if ($contientMinuscule == true and $contientChiffre == false and $contientSpecial == false and $contientMajuscule == true) {
        $base = 52;
    } else if ($contientMinuscule == true and $contientChiffre == true and $contientSpecial == false and $contientMajuscule == true) {
        $base = 62;
    } else if ($contientMinuscule == true and $contientChiffre == true and $contientSpecial == true and $contientMajuscule == true) {
        $base = 85;
    }

    $bit = $longueur * (log($base) / log(2));
    return $bit;
}
