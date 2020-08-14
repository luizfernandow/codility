<?php
namespace Codility\StacksAndQueues;

final class Fish
{
    public static function solution($A, $B)
    {
        $count = count($A);
        $died = 0;
        $P = 0;
        $wait = [];
        for ($i = 1; $i < $count; $i++) {
            $Q = $i;
            if ($B[$P] == 1 && $B[$Q] == 0) {
                $died++;
                if ($A[$P] < $A[$Q]) {
                    if (!empty($wait)) {
                        $P = array_pop($wait);
                        $i--;
                    } else {
                        $P = $Q;
                    }
                }
            } else {
                if ($B[$P] == 1) {
                    $wait[] = $P;
                }
                $P = $Q;
            }
        }
    
        return $count - $died;
    }
}
