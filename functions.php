<?php 

function random_pw($lunghezza) {

    $pw_characters = [
        'abcdefghilmnopqrstuvz',
        'ABCDEFGHILMNOPQRSTUVZ',
        '123456789',
        '£%&?_#'
    ];
    $pw ='';
    for($i = 0; $i < $lunghezza; $i++) {
        $index_characters = rand(0, 3);
        $last = strlen($pw_characters[$index_characters]) -1;
        $pw .= $pw_characters[$index_characters][rand(0,$last)];
    }
    
    return  $pw;
}