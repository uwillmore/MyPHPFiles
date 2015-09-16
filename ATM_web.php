
<?php
/**
 * Created by PhpStorm.
 * User: nw
 * Date: 9/8/15
 * Time: 8:33 PM
 */
function ATM($withdraw, $balance)
{
    $transaction_fee = 0.50;

    if(!is_numeric($withdraw) || !is_numeric($balance))
    {
        return $balance;
    }

    if($withdraw % 5 != 0 )
    {
        return $balance;
    }

    $total = $balance - ($withdraw + $transaction_fee);

    if ($total > 0)
    {
        return $total;
    }
    else
    {
        return $balance;
    }
}



?>


<html>
<head>
    <title>Atm</title>
</head>
<body>
<form method="GET">
    <input type="text" name="withdraw" placeholder="withdraw" />
    <input type="text" name="balance" placeholder="balance" />
    <input type="submit" value="Submit" />
</form>

<h1><?php
    if(isset($_GET['balance'])){
        echo ATM(floatval($_GET['withdraw']), floatval($_GET['balance']));
    }
    ?></h1>

</body>
</html>

