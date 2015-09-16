<?php
/**
 * Created by PhpStorm.
 * User: Ute
 * Date: 9/3/2015
 * Time: 8:10 PM
 */

$myLetters = "ABCABD";

$MyCount = countHoles( $myLetters);

//echo "<br />Found " .$MyCount . " holes.<br />";

function countHoles ($MyStr) {

    $letters = array (
        'A' => 1,
        'B' => 2,
        'D' => 1,
        'G' => 0
    );
    $count = 0;
    $count2 =0;
    $count3 =0;
    $characters = str_split ($MyStr, 1);

    foreach( $characters as $thisChar) {
       if ($letters[$thisChar] > 0){
                 $count += $letters[$thisChar];
        }


     // Alternative short form for the if statement
     // $charVal is assigned the value found at the index or 0
     // depending if the key at the index matches the character
     // we are currently looking at.
     // Then we just add the value returned by the comparison
     //   $charVal = $letters[$thisChar] || 0;
     //   $count += $charVal;


        $charVal = $letters[$thisChar];
        if ($charVal)
            $count2 += $charVal;

        // To shorten this even more we could have said
           $charVal = $letters[$thisChar] || 0;
           $count3 += $charVal;
    }
    echo "<br /> If statement counted " . $count . " holes.";
    echo "<br /> Short statement counted ". $count2 . " holes.";
    echo "<br /> Ultra short form counted ". $count3 . " holes";
    return ($count);
}

