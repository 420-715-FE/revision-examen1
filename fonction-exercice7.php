<?php

function remettreMonnaie($montantARemettre) {
    $coupures = [];

    while ($montantARemettre > 0) {
        if ($montantARemettre >= 100) {
            $coupures[] = "100\$";
            $montantARemettre -= 100;
        } else if ($montantARemettre >= 50) {
            $coupures[] = "50\$";
            $montantARemettre -= 50;
        } else if ($montantARemettre >= 20) {
            $coupures[] = "20\$";
            $montantARemettre -= 20;
        } else if ($montantARemettre >= 10) {
            $coupures[] = "10\$";
            $montantARemettre -= 10;
        } else if ($montantARemettre >= 5) {
            $coupures[] = "5\$";
            $montantARemettre -= 5;
        } else if ($montantARemettre >= 1) {
            $coupures[] = "1\$";
            $montantARemettre -= 1;
        }
        else if ($montantARemettre >= 0.25) {
            $coupures[] = "25¢";
            $montantARemettre -= 0.25;
        } else if ($montantARemettre >= 0.10) {
            $coupures[] = "10¢";
            $montantARemettre -= 0.1;
        } else if ($montantARemettre >= 0.05) {
            $coupures[] = "5¢";
            $montantARemettre -= 0.05;
        } else if ($montantARemettre >= 0.03) {
            $coupures[] = "3¢";
            $montantARemettre = 0;
        } else {
            $montantARemettre = 0;
        }
    }

    return $coupures;
}

?>
