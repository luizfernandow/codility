<?php
namespace Codility\CountingElements;

final class MissingInteger
{
    public static function solution($A)
    {
        $unique = [];
        foreach ($A as $value) {
            if ($value > 0) {
                $unique[$value] = $value;
            }
        }
        if (empty($unique)) {
            return 1;
        }
        $count = count($unique);
        sort($unique);
        for ($i=0; $i < $count; $i++) {
            if ($unique[$i] !== ($i + 1)) {
                return $i + 1;
            }
        }
        return $count + 1;
    }
}
