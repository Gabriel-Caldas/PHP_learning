<?php

function isPalindrome($string) {
    $result = $string === strrev($string) ? true : false;

    return $result;
}

do{
    $word = readline("Enter a string: ");
    
    
    if (isPalindrome($word)) {
        echo ("Its a palindrome!\n");
    } else {
        echo ("Not a palindrome.\n");
    };

}while($word != 'end');


?>