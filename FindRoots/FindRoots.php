<?php

/**
 * @param $a
 * @param $b
 * @param $c
 * @return array|null An array of two elements containing roots in any order
 */
function findRoots($a, $b, $c): ?array
{
    if($a == 0 && $b == 0) {
        return [];
    }
    elseif($a == 0) {
        return [-$c / $b];
    }

    $discriminant = sqrt($b ** 2 - (4 * $a * $c));
    $result = [];
    $result[] = (-$b + $discriminant) / (2 * $a);
    $result[] = (-$b - $discriminant) / (2 * $a);
    return $result;
}

print_r(findRoots(2, 10, 8));;