<?php

// Custom helper functions for speeding up development

function dd($var) {

    var_dump($var);
    die;
}

function dump($var) {
    
    print_r($var);

}

function esc($string) {
    echo htmlentities($string, ENT_QUOTES, 'UTF-8');
}