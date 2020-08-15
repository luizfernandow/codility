<?php
namespace Codility\EuclideanAlgorithm;

final class CommonPrimeDivisors
{
    public static function solution($A, $B)
    {
        $count = count($A);
        $solution = 0;
        for ($i = 0; $i < $count; $i++) {
            if (self::hasSameFactors($A[$i], $B[$i])) {
                $solution++;
            }
        }
        return $solution;
    }


    private static function greatestCommonDivisor($N, $M)
    {
        $rest = $N % $M;
        if ($rest === 0) {
            return $M;
        }
        return self::greatestCommonDivisor($M, $rest);
    }

    private static function hasSameFactors($N, $M)
    {
        if ($N === 0 && $M === 0) {
            return true;
        }
        
        $denominator = self::greatestCommonDivisor($N, $M);
        
        while ($N != 1) {
            $nGcd = self::greatestCommonDivisor($N, $denominator);
            if ($nGcd == 1) {
                break;
            }
            $N /= $nGcd;
        }
        if ($N != 1) {
            return false;
        }
        
        while ($M != 1) {
            $mGcd = self::greatestCommonDivisor($M, $denominator);
            if ($mGcd == 1) {
                break;
            }
            $M /= $mGcd;
        }
        
        return $M === 1;
    }
}
