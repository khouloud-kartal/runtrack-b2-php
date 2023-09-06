<?php

function my_str_reverse(string $string) : string {

    $reverseWord = '';

    $i = 0;

    while (isset($string[$i])) {
        $reverseWord = $string[$i] . $reverseWord;
        $i++;
    }

    return $reverseWord;

}

my_str_reverse('Hello');

?>