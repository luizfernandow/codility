<?php
namespace Codility\PrimeAndCompositeNumbers;

final class MinPerimeterRectangle
{
    public static function solution($N)
    {
        $perimeter = false;
        for ($i = 1; $i <= $N; $i++) {
            if ($N % $i === 0) {
                $div = $N/$i;
                if ($i > $div) {
                    break;
                }
                $calPerimeter = 2 * ($i + $div);
                if ($calPerimeter < $perimeter || $perimeter === false) {
                    $perimeter = $calPerimeter;
                }
            } else {
                $sum = ceil(($N % $i)/floor($N/$i));
                $i += $sum - 1;
            }
        }
        return (Integer)$perimeter;
    }
}
