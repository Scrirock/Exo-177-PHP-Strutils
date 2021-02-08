<?php

    require "./Classes/StrUtils.php";
    // TODO n'oubliez pas de créer votre classe dans le dossier classes.

    $text = new StrUtils("plein de texte cool");

    echo $text->bold()."<br>";
    echo $text->italic()."<br>";
    echo $text->underline()."<br>";
    echo $text->capitalize()."<br>";

    //echo $text->uglify()."<br>";

?>