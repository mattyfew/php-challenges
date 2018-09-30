<?php

    // 1. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line.
    // There will be no hyphen(-) at starting and ending position.

    // $nums = '';
    // for ($i = 0; $i < 10; $i++) {
    //     if ($i === 9) {
    //         echo $i;
    //     } else {
    //         echo $i . "-";
    //     }
    // }





    // 2. Create a script using a for loop to add all the integers
    // between 0 and 30 and display the total.

    // $total = 0;
    //
    // for ($i = 0; $i <= 30; $i++) {
    //     $total += $i;
    // }
    //
    // echo $total;




    // 3. Create a script to construct the following pattern,
    // using nested for loop.
    //
    // *
    // * *
    // * * *
    // * * * *
    // * * * * *

    // $stars = "";
    // for ($i = 0; $i < 5; $i++) {
    //     for ($j = 0; $j < $i+1; $j++) {
    //         $stars .= "* ";
    //     }
    //     $stars .= "<br />";
    // }
    // echo $stars;






    // 4. Create a script to construct the following pattern,
    // using a nested for loop.
    //
    // *
    // * *
    // * * *
    // * * * *
    // * * * * *
    // * * * * *
    // * * * *
    // * * *
    // * *
    // *

    // $stars = '';
    // $counter = 0;
    //
    // for($i = 0; $i < 10; $i++) {
    //     for ($j = 0; $j <= $counter; $j++) {
    //         $stars .= '* ';
    //     }
    //
    //     if ($i === 4) {
    //
    //     } else if ($i > 4) {
    //         $counter--;
    //     } else {
    //         $counter++;
    //     }
    //
    //     $stars .= '<br />';
    // }
    //
    // echo $stars;





    // 5. Write a program to calculate and print the factorial of a number using a for loop.
    // The factorial of a number is the product of all integers up to and including that number,
    // so the factorial of 4 is 4*3*2*1= 24.

    // function get_factorial($n) {
    //     $total = 1;
    //
    //     for($i = 1; $i <= $n; $i++) {
    //         $total = $total * $i;
    //     }
    //
    //     echo $total;
    // }
    //
    // get_factorial(5);
