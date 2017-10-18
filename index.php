<?php


function testLeeftijd($leeftijd){
    if ($leeftijd < 16){
        return $leeftijd . " jaar is te jong voor deze film.";
    }
    else if ($leeftijd >= 16 && $leeftijd <= 18){
        return $leeftijd . " jaar, je hebt ouderlijk toezicht nodig.";
    }
    else {
        return "Je bent al $leeftijd jaar. Geniet van de film";
    }
}
echo testLeeftijd(17), '</br>';
echo testLeeftijd(15), '</br>';
echo testLeeftijd(20), '</br>';



?>