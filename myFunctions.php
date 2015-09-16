<?php
/**
 * Created by PhpStorm.
 * User: Ute
 * Date: 9/14/2015
 * Time: 7:05 PM
 */
require 'myFuncs.php';

$books[] = array(
    "Title" => "Colorado",
    "Author"=> "James Mitchner",
    "ISBN"  =>  "0123841-0",
    "Price" => 7.99,
    "FirstInSeries" =>false,
    "AdditionalTitles" => array ()
);

$books[] = array(
    "Title" => "Clan of the Cave Bear",
    "Author"=> "Jean Auel",
    "ISBN"  =>  "0549984-0",
    "Price" => 9.99,
    "FirstInSeries" => true,
    "AdditionalTitles" => array ( "Valley of the Horses", "The Mammoth Hunters")
);

$books[] = array(
    "Title" => "The Hunt for Red October",
    "Author"=> "Tom Clancy",
    "ISBN"  =>  "0534541-0",
    "Price" => 8.99,
    "FirstInSeries" =>false,
    "AdditionalTitles" => array ()
);

$books[] = array(
    "Title" => "Space Doc",
    "Author"=> "I. E. Viehl",
    "ISBN"  =>  "0917841-0",
    "Price" => 5.99,
    "FirstInSeries" =>true,
    "AdditionalTitles" => array ("Not Available yet.")
);

$books[] = array(
    "Title" => "The Pillars of Creation",
    "Author"=> "Ken Folley",
    "ISBN"  =>  "0952841-0",
    "Price" => 11.99,
    "FirstInSeries" =>false,
    "AdditionalTitles" => array ()
);
?>

<html>
<head>
    Book Listing
</head>
<body>

<?php print "<pre>". print_r ($books, true) . "</pre>"; ?>
<h1>Book Listings</h1>
<table>
    <tr>
        <th>
            Title
        </th>
        <th>
            Author
        </th>
        <th>
            ISBM Number
        </th>
        <th>
            Price ($)
        </th>
        <th>
            Others in Series
        </th>
    </tr>
    <?php printBooks ($books) ?>
</table>

<style>
    table {width: 100%;}
    td {border: 1px solid black}
    th {border: 2px solid black}
</style>
</body>
</html>