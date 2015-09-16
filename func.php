<?php
/**
 * Created by PhpStorm.
 * User: Ute
 * Date: 9/10/2015
 * Time: 8:55 PM
 */
function countEmployees ($employees){
    $count = 0;
    foreach ($employees as $employee) {
        $count++;
    }
    return ($count);
    die ('I died :(');
}

function capName($name){
    return (ucfirst ($name));
}