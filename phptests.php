<?php

/*
    defining and printing arrays
*/

$company2[] = array(
    "Name"=>"Toyota",
    "Product"=>"Cars",
    "Country"=>"Japan",
    "employee" => array ('Ute', 'James', 'Peter')
);
$company2[] = array(
    "Name"=>"Ford",
    "Product"=>"Cars",
    "Country"=>"USA",
    "employee" => array ('Paul', 'John', 'Mike')
);
$company2[] = array(
    "Name"=>"Opel",
    "Product"=>"Cars",
    "Country"=>"Germany",
    "Employees" => array ('Joe', 'Tom')
);
print_r ($company2) ;
echo "<p/><p/>";;
$myName = "Ute";
echo "first echo double quoted variable name<br/>";
echo "$myName<p/>"; // display content of $myName
echo "second echo single quoted variable name<br/>";
echo '$myName<p/>'; // disolays $myName, not content


echo "<br/> Printing company 2 <br/>";
$x = print_r ($company2, true);
print "<pre>" . $x ."</pre>";

foreach ($company2 as $c) {
    print "<pre>".print_r ($c['Name'], true)."</pre>";
}


$company3 = array(
    "Toyota" =>  array (
    "Name" => "Toyota",
    "Product"=>"Cars",
    "Country"=>"Japan",
    "employee" => array ('Ute', 'James', 'Peter')
)
);

$company3[] = array(
    "Name"=>"Ford",
    "Product"=>"Cars",
    "Country"=>"USA",
    "employee" => array ('Paul', 'John', 'Mike')
);
$company3[] = array(
    "Name"=>"Opel",
    "Product"=>"Cars",
    "Country"=>"Germany",
    "Employees" => array ('Joe', 'Tom')
);

Echo "Company3 follows <p><p></p>";
print "<pre>".print_r($company3, true)."</pre>";

foreach ($company3 as $key => $comp){
    print "<li>" . $key . " - " . $comp['Name']. "</li>";
}

print "<pre>".print_r($company3, true)."</pre>";