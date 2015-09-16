<?php
include ('func.php');
// require_once ('func.php'); //Require reports errors, include does not. Otherwise they are the same
                                // include_once and require work also, so does include_twice.
/**
 * Created by PhpStorm.
 * User: Ute
 * Date: 9/10/2015
 * Time: 8:06 PM
 * Data Definitions go above HTML code
 * according to Dave
 */
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
    "zip" => "80301",
    "employees" => array ('Joe', 'Tom')
);
$companies[] = array(
    "name" => "HP",
    "address" => "123 HP Drive",
    "city" => "Fort Collins",
    "state" => "CO",
    "zip" => "80524",
    "employees" => array ('Paul', 'John', 'Mike')
);
$companies[] = array(
    "name" => "Digital Globe",
    "address" => "123 DG Street",
    "city" => "Longmont",
    "state" => "CO",
    "zip" => "80501",
    "employees" => array ('Ute', 'James', 'Peter')
);


?>

<html>
<head>
    <h1>Company Listings</h1>
</head>
<body>

<?php print "<pre>". print_r ($companies, true) . "</pre>"; ?>
<?php $TotalEmployees = 0; ?>
<table>
    <tr>
        <td>
            Name
        </td>
        <td>
            Address
        </td>
        <td>
            City
        </td>
        <td>
            Number of Employees
        </td>
        <td>
            Employee Names
        </td>
    </tr>
    <?php foreach ($companies as $company) { ?>
    <tr>
        <td><?php print $company ['name']; ?>        </td>
        <td><?php print $company ['address']; ?>     </td>
        <td> <?php print $company ['city']; ?>        </td>
        <?php $count = countEmployees ($company['employees']); ?>
        <td><?php  print $count;?> </td>
        <?php $TotalEmployees += $count;?>
        <td>
            <?php   foreach ($company['employees'] as $employee) {
                print capName ($employee . " ");
            } ?>
            <?php   } ?>
        </td>
    </tr>
</table>

<?php print "Total number of Employees: " .$TotalEmployees; ?>
<style>
    table {width: 100%;}
    td { border: 1px solid black}
</style>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Ute
 * Date: 9/10/2015
 * Time: 8:06 PM
 * Functions go below HTML code
 * according to Dave
 */
