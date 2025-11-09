<?php
function produitMatrices($mat1, $mat2) {
    $n = count($mat1);          // Nombre de lignes de mat1
    $m = count($mat2[0]);       // Nombre de colonnes de mat2
    $p = count($mat2);          // Nombre de lignes de mat2

    $resultat = [];

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $m; $j++) {
            $resultat[$i][$j] = 0;
            for ($k = 0; $k < $p; $k++) {
                $resultat[$i][$j] += $mat1[$i][$k] * $mat2[$k][$j];
            }
        }
    }

    return $resultat;
}

// Exemple d'utilisation :
$matrice1 = [
    [1, 2],
    [3, 4]
];

$matrice2 = [
    [5, 6],
    [7, 8]
];

$produit = produitMatrices($matrice1, $matrice2);

echo "Produit des matrices :\n";
foreach ($produit as $ligne) {
    echo implode(" ", $ligne) . "\n";
}
?>