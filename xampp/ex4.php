<?php





$test1 = "Bonjour";
$test2 = "Bonjour123";

echo "Test avec '$test1' : ";
echo contientSeulementDesLettres($test1) ? "✅ Seulement des lettres" : "❌ Contient autre chose que des lettres";
echo "<br>";

echo "Test avec '$test2' : ";
echo contientSeulementDesLettres($test2) ? "✅ Seulement des lettres" : "❌ Contient autre chose que des lettres";
