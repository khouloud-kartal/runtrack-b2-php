<?php 

function my_is_prime(int $number) : bool{

    if($number == 1){
        return true;
    }

    for($i = 2; $i <$number; $i++){

        if(($number % $i) == 0){
            return false;
        }

    }    

}

my_is_prime(7);

// my_is_prime(12);

?>