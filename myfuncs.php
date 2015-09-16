<?php
/**
 * Created by PhpStorm.
 * User: Ute
 * Date: 9/14/2015
 * Time: 8:01 PM
 */

function printBooks ($books)
{

    foreach ($books as $book) {
        print "<tr>";
        print "<td>" . $book ['Title'] . "</td>";
        print "<td>" . $book ['Author'] . "</td>";
        print "<td>" . $book ['ISBN'] . "</td>";
        print "<td>" . $book ['Price'] . "</td>";
        if ($book ['FirstInSeries'] == true) {
            print "<td>";
            foreach ($book['AdditionalTitles'] as $title) {
                print "'". $title . "' ";
            } // end foreach title
            print "</td";
        } else // end if
            print "<td> </td>";
        print "</tr>";
    }; // end foreach book
}
?>