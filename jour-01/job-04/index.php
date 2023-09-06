<?php

function my_fizz_buzz(int $length) : array{

    $tab = [];

    for ($i=1; $i <= $length; $i++){ 

        if((($i % 3) == 0) && (($i % 5) == 0)){
            $tab[] = 'FizzBuzz';
        }elseif (($i % 3) == 0) {
            $tab[] = 'Fizz';
        }elseif (($i % 5) == 0) {
            $tab[] = 'Buzz';
        }else{
            $tab[] = $i;
        }
    }

    return $tab;
}

my_fizz_buzz(15);

?>