<?php
namespace Codility\PrimeAndCompositeNumbers;

final class Peaks
{
    public static function solution($A)
    {
        $count = count($A);
        $peaks = self::createPeaks($A, $count);
        $nPeaks = count($peaks);
        if ($nPeaks < 2) {
            return $nPeaks;
        }

        for ($i = $nPeaks; $i > 1; $i--) {
            if ($count % $i === 0) {
                $q = $count / $i;
                $found = [];
                $foundCount = 0;
                foreach ($peaks as $peak) {
                    $block = $peak/$q;
                    if (!isset($found[$block])) {
                        $found[$block] = true;
                        $foundCount++;
                    }
                }
                if ($foundCount === $i) {
                    return $i;
                }
            }
        }
        return $i;
    }

    private static function createPeaks($A, $count)
    {
        $peaks = [];
        for ($i = 1; $i < $count - 1; $i++) {
            if ($A[$i -1] < $A[$i] && $A[$i] > $A[$i + 1]) {
                $peaks[] = $i;
                $i++;
            }
        }
        return $peaks;
    }
}
