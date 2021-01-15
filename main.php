<?php
 function FibonacciCalculator($num)
    {
        if ($num == 0) {
            return 0;
        }
        if ($num == 1) {
            return 1;
        }

        return (FibonacciCalculator($num - 1) + FibonacciCalculator($num - 2));
    }

     $number = 10; //any number here
        $number = range (0,$number);

        print_r(array_map('FibonacciCalculator',$number));