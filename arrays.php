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





// 8. 




function logg($arr) {
    echo '<pre>' . var_export($arr, true) .'</pre>';
}

 ?>