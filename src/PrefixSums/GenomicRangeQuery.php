<?php
namespace Codility\PrefixSums;

final class GenomicRangeQuery
{
    public static function solution($S, $P, $Q)
    {
        $response = [];
        $count = count($P);
        for ($i = 0; $i < $count; $i++) {
            $sub = substr($S, $P[$i], $Q[$i] - $P[$i] + 1);
            $pos = strpos($sub, 'A');
            if ($pos !== false) {
                $response[] = 1;
                continue;
            }
            $pos = strpos($sub, 'C');
            if ($pos !== false) {
                $response[] = 2;
                continue;
            }
            $pos = strpos($sub, 'G');
            if ($pos !== false) {
                $response[] = 3;
                continue;
            }
            $pos = strpos($sub, 'T');
            if ($pos !== false) {
                $response[] = 4;
                continue;
            }
        }
        return $response;
    }
}
