<?php
namespace Codility\StacksAndQueues;

final class Nesting
{
    public static function solution($S)
    {
        if (empty($S)) {
            return 1;
        }
        $stack = [];
        foreach (str_split($S) as $value) {
            if ($value === '(') {
                $stack[] = $value;
            } else {
                $v = array_pop($stack);
                if ($v !== '(') {
                    return 0;
                }
            }
        }
        if (empty($stack)) {
            return 1;
        }
        return 0;
    }
}
