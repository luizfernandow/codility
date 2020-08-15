<?php
namespace Codility\SieveOfEratosthenes;

final class CountSemiprimes
{
    public static function solution($N, $P, $Q)
    {
        $semi = self::sieve($N);
        $max = max($Q);
        $count = count($Q);
        $prefix = [0, 0, 0, 0, 1];
        for ($i = 5; $i <= $max; $i++) {
            if (isset($semi[$i])) {
                $prefix[] = $prefix[$i - 1] + 1;
            } else {
                $prefix[] = $prefix[$i - 1];
            }
        }
        $solution = [];
        for ($i = 0; $i < $count; $i++) {
            $solution[] = $prefix[$Q[$i]] - $prefix[$P[$i] - 1];
        }
        
        return $solution;
    }

    private static function sieve($N)
    {
        $semi = [];
        $sieve = array_fill(0, $N + 1, true);
        $sieve[0] = $sieve[1] = false;
        $i = 2;
        while ($i * $i <= $N) {
            if ($sieve[$i] === true) {
                for ($j = $i * $i; $j <= $N; $j += $i) {
                    $sieve[$j] = false;
                }
            }
            $i++;
        }
        $i = 2;
        while ($i * $i <= $N) {
            if ($sieve[$i]  === true) {
                for ($j = $i * $i; $j <= $N; $j += $i) {
                    if ($j % $i == 0 && $sieve[$j/$i]  === true) {
                        $semi[$j] = $j;
                    }
                }
            }
            $i++;
        }
        
        return $semi;
    }
}
