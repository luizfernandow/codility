<?php
namespace Codility\EuclideanAlgorithm;

final class ChocolatesByNumbers
{
    private static function greatestCommonDivisor($N, $M)
    {
        $rest = $N % $M;
        if ($rest === 0) {
            return $M;
        }
        return self::greatestCommonDivisor($M, $rest);
    }

    public static function solution($N, $M)
    {
        return $N / self::greatestCommonDivisor($N, $M);
    }
}
