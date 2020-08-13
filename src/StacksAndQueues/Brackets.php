<?php
namespace Codility\StacksAndQueues;

final class Brackets
{
    public static function solution($S)
    {
        $stack = [];
        foreach (str_split($S) as $value) {
            switch ($value) {
                case '(':
                case '{':
                case '[':
                    $stack[] = $value;
                    break;
                case ']':
                    $v = array_pop($stack);
                    if ($v !== '[') {
                        return 0;
                    }
                    break;
                case '}':
                    $v = array_pop($stack);
                    if ($v !== '{') {
                        return 0;
                    }
                    break;
                case ')':
                    $v = array_pop($stack);
                    if ($v !== '(') {
                        return 0;
                    }
                    break;
            }
        }
        if (empty($stack)) {
            return 1;
        }
        return 0;
    }
}
