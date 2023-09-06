<?php

function my_str_search(string $haystack, string $needle) : int {

    $needleCount = 0;

    for ($i=0; isset($haystack[$i]); $i++) { 
    
        if ($haystack[$i] == $needle) {
            $needleCount++;
        }   
    }
    
    return($needleCount);

}

my_str_search('La Plateforme', 'e');


?>