<?php 
declare(strict_types = 1);

$number = 11;
$parity = ($number % 2 == 0) ? "even" : "odd";

printNumbers($parity, $number);

function EvenNumbers($number) : array
{
    for ($i = $number; $i >= 0; $i--) {
        if ($i % 2 == 0) {
            $evenNumbers[] = $i;
        }
    }
    return $evenNumbers;
}

function OddNumbers($number) : array
{
    for ($i = $number; $i >= 0; $i--) { 
        if ($i % 2 !== 0) {
            $oddNumbers[] = $i;
        }
    }
    return $oddNumbers;
}

function printNumbers($parity, $number) : void
{
    if ($parity == "even") {
        echo implode(',', EvenNumbers($number));
    } else {
        echo implode(',', OddNumbers($number));
    }
}

?>
