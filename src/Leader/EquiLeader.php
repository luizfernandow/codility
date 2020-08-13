<?php
namespace Codility\Leader;

final class EquiLeader
{
    public static function solution($A)
    {
        $count = count($A);
        $valuesCount = array_count_values($A);
        $left = [];
        $equi = 0;
        $leader = $A[0];
        for ($i = 0; $i < $count - 1; $i++) {
            $valuesCount[$A[$i]]--;
            if (!isset($left[$A[$i]])) {
                $left[$A[$i]] = 0;
            }
            if (!isset($left[$leader])) {
                $left[$leader] = 0;
            }
            $left[$A[$i]]++;
            if ($left[$leader] < $left[$A[$i]]) {
                $leader = $A[$i];
            }
            $leaderA = self::leader($leader, $left, $i + 1);
            $leaderB = self::leader($leader, $valuesCount, $count - $i - 1);
            if ($leaderA !== false && $leaderB !== false) {
                $equi++;
            }
        }
        
        return $equi;
    }

    private static function leader($leader, $values, $count)
    {
        if ($values[$leader] <= $count/2) {
            return false;
        }
        return $leader;
    }
}
