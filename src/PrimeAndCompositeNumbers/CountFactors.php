<?php
namespace Codility\PrimeAndCompositeNumbers;

final class CountFactors
{
    public static function solution($N)
    {
        $factors = 1;
        for ($i = 2; $i <= $N; $i++) {
            if ($N % $i === 0) {
                $factors++;
            } else {
                $sum = ceil(($N % $i)/floor($N/$i));
                $i += $sum - 1;
            }
        }
        return $factors;
    }
}
