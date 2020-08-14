<?php
namespace Codility\StacksAndQueues;

final class StoneWall
{
    public static function solution($H)
    {
        $count = count($H);
        $blocks = 0;
        $stack = [];
        for ($i = 0; $i < $count; $i++) {
            while (!empty($stack) && end($stack) > $H[$i]) {
                array_pop($stack);
            }
            
            if (!empty($stack) && end($stack) == $H[$i]) {
                continue;
            }
            $blocks++;
            $stack[] = $H[$i];
        }
        return $blocks;
    }
}
