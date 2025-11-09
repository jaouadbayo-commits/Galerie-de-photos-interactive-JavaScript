<?php


    function contientUniquementLettres($chaine) {
        return preg_match("/^[a-zA-Z]$/", $chaine);
    }

 
    function contientArobase($chaine) {
        return strpos($chaine, '@') !== false;
    }

    function estNumeroTelephone($chaine) {
        return preg_match("/^\d{2}-\d{2}-\d{2}-\d{2}-\d{2}$/", $chaine);
    }

  
    function estMatriculeValide($chaine) {
        return preg_match("/^[a-zA-Z]{3}\d{2}$/", $chaine);
    }

 
    function estCodePostalValide($chaine) {
        return preg_match("/^\d{5}$/", $chaine);
    }

    

?>
