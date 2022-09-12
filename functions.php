<?php
    /*getAllEtudiants() est une fonction qui initialise 
    un tableau de 5 étudiants et le retourne
    Un étudiant est caractérisé par son matricule, son nom,
    son prénom, sa couleur, sa photo et un tableau des ses notes
    NB: Le matricule de l'étudiant est généré sous la forme suivante :
    ET@Nombre Aléatoire compris entre 10000 et 50000#Nombre de caractéres du nom*/

    function getAllEtudiants()
    {
        $T = [
            [
                "nom" => "wade",
                "prenom" => "gora dia",
                "matricule" => "ET@".rand(10000,50000)."#".strlen('wade'),
                "couleur" => "blue",
                "photo" => "images/487192.png",
                "notes" => array(12, 13, 20, 8, 9)
            ],
            [
                "nom" => "moussa",
                "prenom" => "adala",
                "matricule" => "ET@".rand(10000,50000)."#".strlen('moussa'),
                "couleur" => "pink",
                "photo" => "images/naruto.png",
                "notes" => array(2, 4, 15, 8)
            ],
            [
                "nom" => "diallo",
                "prenom" => "assiétou",
                "matricule" => "ET@".rand(10000,50000)."#".strlen('diallo'),
                "couleur" => "orange",
                "photo" => "images/charingan.jpg",
                "notes" => array(12, 14, 20, 8, 19)
            ],
            [
                "nom" => "ibrahim",
                "prenom" => "assaira",
                "matricule" => "ET@".rand(10000,50000)."#".strlen('ibrahim'),
                "couleur" => "red",
                "photo" => "images/naruto_sasuke_kagouya.png",
                "notes" => array(7, 8, 4, 8)
            ],
            [
                "nom" => "ndiaye",
                "prenom" => "abdoul fatah",
                "matricule" => "ET@".rand(10000,50000)."#".strlen('ndiaye'),
                "couleur" => "yellow",
                "photo" => "images/zabouza.jpg",
                "notes" => array(17, 16, 14, 8, 5)
            ]
        ];

        return $T;
    }


    /*getMoyenne() est une fonction qui prend en paramétre un tableau de notes, 
    calcule la moyenne puis la retourne*/

    function getMoyenne($tabNotes)
    {
        $som=0;
        for ($i=0; $i < count($tabNotes); $i++) { 
            $som += $tabNotes[$i];
        }
        $moy=$som/sizeof($tabNotes);
        return $moy;
    }

    /*ordreDeMerite() est une fonction qui prend en paramétre un tableau
    d'étudiants, trie celui-ci dans l'ordre décroissant sur la moyenne puis
    le retourne*/

    function ordreDeMerite($T)
    {
        for ($i=0; $i < count($T)-1; $i++) { 
            for ($j=$i+1; $j < count($T); $j++) { 
                $moyi = getMoyenne($T[$i]['notes']);
                $moyj = getMoyenne($T[$j]['notes']);
                if($moyi < $moyj)
                {
                    $tmp = $T[$i];
                    $T[$i] = $T[$j];
                    $T[$j] = $tmp;
                }
            }
        }

        return $T;
    }