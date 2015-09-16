<?php
/**
 * Created by PhpStorm.
 * User: Ute
 * Date: 9/3/2015
 * Time: 7:21 PM
 */

$title = "Test Page";
$people = array ("Ute", "Nate", "tom");

$person = $people [array_rand ($people)];
echo "Person is: ". $person;

$rand_idx = array_rand ($people);
echo "<br /> Rand_idx is ". $rand_idx;
echo "<br /> person at Rand_idx is " . $people[$rand_idx];

$array_keys = array_rand ($people, 3);
echo "<br />array_keys length is ". count($array_keys);

$keyCount = count($array_keys);
echo "<br />keyCount is ". $keyCount;


for ($i=0; $i++; $i < $keyCount){
    echo "At array_Keys [".$i . "] found " . $array_keys[$i];
}