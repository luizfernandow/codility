<?php
namespace Codility\PrimeAndCompositeNumbers;

final class Flags
{
    public static function solution($A)
    {
        $count = count($A);
        $next = self::nextPeak($A, $count);
        $i = 1;
        $result = 0;
        while (($i - 1) * $i <= $count) {
            $pos = 0;
            $num = 0;
            while ($pos < $count && $num < $i) {
                $pos =  $next[$pos];
                if ($pos === -1) {
                    break;
                }
                $num++;
                $pos += $i;
            }
            $result = max($result, $num);
            $i++;
        }
        return $result;
    }

    private static function nextPeak($A, $count)
    {
        $peaks = self::createPeaks($A, $count);
        $next = [];
        $next[$count - 1] = -1;
        for ($i = $count - 2; $i >= 0;  $i--) {
            if (isset($peaks[$i])) {
                $next[$i] = $i;
            } else {
                $next[$i] = $next[$i + 1];
            }
        }
        return $next;
    }

    private static function createPeaks($A, $count)
    {
        $peaks = [];
        for ($i = 1; $i < $count - 1; $i++) {
            if ($A[$i -1] < $A[$i] && $A[$i] > $A[$i + 1]) {
                $peaks[$i] = true;
                $i++;
            }
        }
        return $peaks;
    }
}
