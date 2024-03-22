<?php
$a = array();
$a[] = 123;
$a[] = 223;
$a[] = 323;
$a[] = 423;
print_r($a);
arrayAdd($a);
print_r($a);

print_r(arrayAdd($a));

function arrayAdd(array $arr)
{
    $arr[] = 523;
    return $arr;
}
