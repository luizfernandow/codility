<?php
namespace Codility\SieveOfEratosthenes;

final class CountNonDivisible
{
    public static function solution($A)
    {
        $max = max($A);
        $lenA = count($A);
        $count = [];
        foreach ($A as $value) {
            if (!isset($count[$value])) {
                $count[$value] = 0;
            }
            $count[$value]++;
        }
        
        $divisors = [];
        foreach ($A as $value) {
            $divisors[$value] = [1 => 1, $value => $value];
        }
        
        $divisor = 2;
        while ($divisor * $divisor <= $max) {
            $candidate = $divisor;
            while ($candidate <= $max) {
                if (isset($divisors[$candidate]) && !isset($divisors[$candidate][$divisor])) {
                    $divisors[$candidate][$divisor] = $divisor;
                    $div = $candidate/$divisor;
                    $divisors[$candidate][$div] = $div;
                }
                $candidate += $divisor;
            }
            $divisor++;
        }
        
        $result = [];
        foreach ($A as $index => $value) {
            $sum = 0;
            foreach ($divisors[$value] as $key => $div) {
                if (isset($count[$key])) {
                    $sum += $count[$key];
                }
            }
            $result[$index] =  $lenA - $sum;
        }
        return $result;
    }
}
