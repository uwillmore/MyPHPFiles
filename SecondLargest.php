<?php
/**
 * Created by PhpStorm.
 * User: Ute
 * Date: 9/8/2015
 * Time: 5:55 PM
 */

$a = "five";
$result = 0;


echo " <br />Calling function with 5,1,8";

$result = secondLargest2 (5,1,8);

echo " <br />Calling function with 9,6,4";

$result = secondLargest2 (9,6,4);


echo " <br />Calling function with 9,3, 16";

$result = secondLargest2 (9,3, 16);

echo " <br />Calling function with 5,5,5";

$result = secondLargest2 (5,5,5);


function secondLargest ($first, $second, $third)
{

    $middle = 0;

    if (!is_numeric($first) || !is_numeric($second) || !is_numeric($third)) {
        die (" Invalid input variable! <br/>");
    }
    if ($first > $second && $first > $third) {
        $largest = $first;
    } elseif ($second > $first && $second > $third) {
        $largest = $second;
    } else $largest = $third;

    echo "<br/> Largest is: " . $largest;
    if ($first < $second && $first < $third) {
        $smallest = $first;
    } elseif ($second < $first && $second < $third) {
        $smallest = $second;
    } else $smallest = $third;
    echo "<br/>Smallest is: " . $smallest;
    if ($first < $largest && $first > $smallest) {
        $middle = $first;
    } elseif ($second <= $largest && $second >= $smallest) {
        $middle = $second;
    } elseif ($third <= $largest && $third >= $smallest)
        $middle = $third;

    echo "<br/>Middle is: " . $middle;
}
    function secondLargest2 ($first, $second, $third)
    {

        $middle = 0;
        if ($first >= $second && $first <= $third || $first >= $third && $first <= $second) {
            echo "<br/>middle is first <br/>";
            $middle = $first;
        } elseif ($second <= $first && $second >= $third || $second >= $first && $second <= $third) {
            echo "<br/>middle is second <br/>";
            $middle = $second;
        }
        else {
            echo "<br/>middle is third <br/>";
            $middle = $third;
        }
      //  } elseif ($third >= $first && $third <= $second || $third <= $first && $third >= $second) {
    //        echo "<br/>middle is third <br/>";
            $middle = $third;
     //   };

        return ($middle);
}
/*
 * Shortest version:stuff variables into an array, sort the array
 * and return the 2nd element in the array.
 */
function secondlargest3 ($a, $b,$c) {
    $arr = array ($a, $b, $c);
    sort ($arr, SORT_NUMERIC);
    return ($arr[1]);

}