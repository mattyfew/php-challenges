<?php

// 1. $color = array('white', 'green', 'red', 'blue', 'black');
// Write a script which will display the following string
// "The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
// and the words 'red', 'green' and 'white' will come from $color.

// $color = array('white', 'green', 'red', 'blue', 'black');
// echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"




// 2. $color = array('white', 'green', 'red')
// Write a PHP script which will display the colors as a ul and li

// $color = array('white', 'green', 'red');
// $html = '<ul>';
//
// foreach($color as $c) {
//     $html .= "<li>$c</li>";
// }
// $html .= '</ul>';
//
// echo $html;






// 3. $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;
//
// Create a PHP script which displays the capital and country name from the above array $ceu. Sort the list by the capital of the country. Go to the editor
//
// Sample Output :
// The capital of Netherlands is Amsterdam
// The capital of Greece is Athens
// The capital of Germany is Berlin


// $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");
//
// $html = '';
// foreach($ceu as $city => $country) {
//     $html .= "<p>The capital of $country is $city</p>";
// }
// echo $html;





// 4. $x = array(1, 2, 3, 4, 5);
// Delete an element from the above PHP array. After deleting the element, integer keys must be normalized.
// Sample Output :
// array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
// array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }

// $x = array(1, 2, 3, 4, 5);
// array_splice($x, 3, 1);
// logg($x);






// 5. $color = array(4 => 'white', 6 => 'green', 11 => 'red');
// Write a PHP script to get the first element of the above array.
// Expected result : white

// $color = array(4 => 'white', 6 => 'green', 11 => 'red');
// get_first($color);
//
// function get_first($arr) {
//     echo reset($arr);
// }







// 6. Write a PHP script which decodes the following JSON string.
// Sample JSON code :
// {"Title": "The Cuckoos Calling",
// "Author": "Robert Galbraith",
// "Detail": {
// "Publisher": "Little Brown"
// }}
// Expected Output :
// Title : The Cuckoos Calling
// Author : Robert Galbraith
// Publisher : Little Brown

// $json = '{"Title": "The Cuckoos Calling","Author": "Robert Galbraith","Detail": {"Publisher": "Little Brown"}}';
// $html = '';
// $result = json_decode($json, true);
//
// function add_p($v, $key) {
//     echo "<p>$key : $v</p>";
// }
//
// array_walk_recursive($result, 'add_p');






// 7. Write a PHP script that inserts a new item in an array in any position.
// Expected Output :
// Original array :
// 1 2 3 4 5
// After inserting '$' the array is :
// 1 2 3 $ 4 5

// $my_array = array(1, 2, 3, 4, 5);
// array_splice($my_array, 3, 0, '%');
//
// logg($my_array);





// 8. Write a PHP script to sort the following associative array :
// array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
// $arr = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

// a) ascending order sort by value
// asort($arr);

// b) ascending order sort by Key
// ksort($arr);

// c) descending order sorting by Value
// arsort($arr);

// d) descending order sorting by Key
// krsort($arr);

// logg($arr);







// 9. Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.
// Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
// Expected Output :
// Average Temperature is : 70.6
// List of seven lowest temperatures : 60, 62, 63, 63, 64,
// List of seven highest temperatures : 76, 78, 79, 81, 85,

// $temps = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
// $average = array_sum($temps)/count($temps);
// echo "Average Temperature is $average";

// sort($temps);
// logg($temps);

// function get_five_min($original_array) {
//     // array_slice takes a 4th param (boolean) which will preserve the keys of the array
//     // when set to true, default is false.
//     return array_slice($original_array, 0, 5);
// }

// function get_five_max($original_array) {
//     return array_slice($original_array, count($original_array) - 5, count($original_array));
// }

// echo print_r(get_five_min($temps));
// echo print_r(get_five_max($temps));






// 10. Write a PHP program to sort an array of positive integers using the Bead-Sort Algorithm.
// According to Wikipedia "Bead-sort is a natural sorting algorithm, developed by Joshua J. Arulanandham,
// Cristian S. Calude and Michael J. Dinneen in 2002. Both digital and analog hardware implementations of
// bead sort can achieve a sorting time of O(n); however, the implementation of this algorithm tends
// to be significantly slower in software and can only be used to sort lists of positive integers".

// Nahhhhhhhhhhh





// 11. Write a PHP program to merge (by index) the following two arrays.
// Sample arrays :
// $array1 = array(array(77, 87), array(23, 45));
// $array2 = array("w3resource", "com");
// Expected Output :
//
// Array  (
//     [0] => Array(
//         [0] => w3resource
//         [1] => 77
//         [2] => 87
//     )
//     [1] => Array(
//         [0] => com
//         [1] => 23
//         [2] => 45
//     )
// )

$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");

foreach ($array1 as $i => $nested_arr) {
    array_unshift($nested_arr, $array2[$i]);
    $array1[$i] = $nested_arr;
}

logg($array1);




function logg($arr) {
    echo '<pre>' . var_export($arr, true) .'</pre>';
}

 ?>
