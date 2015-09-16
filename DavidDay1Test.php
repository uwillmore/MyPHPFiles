<html>
<head>
</head>
<body>
<?php



$companies[]= array (
            "name" => "Madwire",
            "address" => "550 West Eisenhower Blvd",
            "city" => "Loveland",
            "state" => "CO",
            "zip" => "80537",
            "employees" => array('david','joe','jb','jerry')
    );
$companies[] = array(
    "name" => "IBM",
    "address" => "123 IBM Drive",
    "city" => "Boulder",
    "state" => "CO",
    "zip" => "80301"
);
$companies[] = array(
    "name" => "HP",
    "address" => "123 HP Drive",
    "city" => "Fort Collins",
    "state" => "CO",
    "zip" => "80524"
);
$companies[] = array(
    "name" => "Digital Globe",
    "address" => "123 DG Street",
    "city" => "Longmont",
    "state" => "CO",
    "zip" => "80501"
);

$x = "madwire";


// bug fix
print $companies[$x]['name'];

foreach($companies as $key => $company){
    print "<li>". $key .  " - " . $company['name']. "</li>";
}

print "<pre>".print_r($companies, true). "</pre>";



?>


</body>

