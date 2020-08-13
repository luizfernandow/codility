<?php
namespace Codility\TimeComplexity;

final class FrogJmp
{
    public static function solution($X, $Y, $D)
    {
        return (Integer)ceil(($Y - $X)/$D);
    }
}
