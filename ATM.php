<?php

define('Service_fee', '.50');
$balance = 420.00;
$debit = 35.00;

echo "<br /> Balance is: $ " .$balance;
echo "<br /> Requested amount is: $ ". $debit;

if (insufficientFunds($balance, $debit, .50)){
    echo "<br /> Insufficient Funds. ";
}
elseif (!isDivisibleBy ($debit, 5)) {
    echo "<br/> Amount must be divisible by 5";
}
else {
    $balance = $balance - $debit - .50;
    echo "<br/> New balance is: $". $balance;
}

exit;

function isDivisibleBy ($val, $divisor)
{
    if ($val % $divisor == 0)
        return (true);
    else
        return (false);
}

function insufficientFunds ($bal, $deb, $fee){

    if ($bal - $deb - $fee > 0.0)
        return (false);
    else
        return (true);
}
