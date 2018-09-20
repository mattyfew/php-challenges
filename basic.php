<!-- https://www.w3resource.com/php-exercises/ -->


<?php
    // 1. Write a PHP script to get the PHP version and configuration information.
    // echo "PHP version: " . phpversion();
    // echo "Configuration info: " . phpinfo(INFO_CONFIGURATION);

    // can also just run phpinfo();



    // 2. Write a PHP script to display the following strings.
    /*
        Sample String :
        'Tomorrow I \'ll learn PHP global variables.'
        'This is a bad command : del c:\\*.*'
        Expected Output :
        Tomorrow I'll learn PHP global variables.
        This is a bad command : del c:\*.*
    */

    // echo 'Tomorrow I\'ll learn PHP global variables.';
    // echo '<br />';
    // echo 'This is a bad command : del c:\\*.*'




    // 3. $var = 'PHP Tutorial'. Put this variable into the title section, h3 tag and as an anchor text within an HTML document. Go to the editor
    // Sample Output :
    //
    // PHP Tutorial
    // PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.
    // Go to the PHP Tutorial.

    // $title = 'PHP Tutorial';
    // $h3 = 'PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.';
    // NOTE: include_once('header.php')



    // 4. Create a simple HTML form and accept the user name and display the name through PHP echo statement.
    // SEE form.php for answer




    // 5. Write a PHP script to get the client IP address.
    // echo $_SERVER['HTTP_X_FORWARDED_FOR'];
    // echo '<pre>' . var_export($_SERVER, true) . '</pre>';
    /* highlight_string("<?php\n\$data =\n" . var_export($_SERVER, true) . ";\n?>"); */
    // echo $_SERVER['REMOTE_ADDR'];

    //whether ip is from share internet
    // if (!empty($_SERVER['HTTP_CLIENT_IP']))
    //   {
    //     $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    //   }
    // //whether ip is from proxy
    // elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    //   {
    //     $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    //   }
    // //whether ip is from remote address
    // else
    //   {
    //     $ip_address = $_SERVER['REMOTE_ADDR'];
    //   }
    // echo $ip_address;


    // 6. Write a simple PHP browser detection script. Go to the editor
    // Sample Output : Your User-Agent is: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.114 Safari/537.36

    // $str = "Your User-Agent is: " . $_SERVER["HTTP_USER_AGENT"];
    // echo $str;



    // 7. Write a PHP script to get the current file name.
    // echo basename(__FILE__);




    // 8. Write a PHP script, which will return the following components of the url 'https://www.w3resource.com/php-exercises/php-basic-exercises.php'.
    // List of components : Scheme, Host, Path
    // Expected Output :
    // Scheme : http
    // Host : www.w3resource.com
    // Path : /php-exercises/php-basic-exercises.php

    // echo "Scheme: " .
    // echo "Host: " .
    // echo "Path: " .

    // $url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';
    // print_r('<pre>' . parse_url($url) . '');




    // 9. Write a PHP script, which changes the color of the first character of a word.

    // $word = 'Salmon';
    // $first_letter = substr($word, 0, 1);
    // $rest_of_word = substr($word, 1);
    // $html = "<p><span style='color: salmon;'>$first_letter</span>$rest_of_word</p>";
    // echo $html



    // 10. Write a PHP script, to check whether the page is called from 'https' or 'http'.

    // echo '<pre>' . var_export($_SERVER, true) . '</pre>';
    // $protocol = substr($_SERVER['SERVER_PROTOCOL'], 0, 4);

    // if (substr($_SERVER['SERVER_PROTOCOL'], 0, 5) === 'HTTPS') {
    //     echo 'The protocol is HTTPS!';
    // } else if (substr($_SERVER['SERVER_PROTOCOL'], 0, 5) === 'HTTP/') {
    //     echo 'The protocol is HTTP!';
    // } else {
    //     echo 'I got nothing :/';
    // }




    // 11. Write a PHP script to redirect a user to a different page.

    // header("Location: http://mattfewer.com");
    // exit(); // It is a good practice to call exit() right afterwords so that code below it does not get executed.





    // 12. Write a simple PHP program to check that emails are valid.
    // Hints : Use FILTER_VALIDATE_EMAIL filter that validates value as an e-mail address.
    // Note : The PHP documentation does not say that FILTER_VALIDATE_EMAIL should pass the RFC5321.

    // SEE check_valid_email.php for answer




    // 13. Write a PHP script to display string values within a table
    // Note: Use HTML table elements into echo.

    // $data = array(
    //     'Mr. A' => 1000,
    //     'Mr. B' => 1250,
    //     'Mrs. C' => 3000
    // );
    //
    // $html = '<table>';
    // $html .= '<tr>';
    // $html .= '<th>Name</th>';
    // $html .= '<th>Salary</th>';
    // $html .= '</tr>';
    //
    // foreach($data as $key => $value){
    //     $html .= "<tr>";
    //     $html .= "<td>$key</td>";
    //     $html .= "<td>$$value</td>";
    //     $html .= "</tr>";
    // }
    //
    // $html .= '</table>';
    // echo $html;





    // 14. Write a PHP script to display source code of a webpage (e.g. "http://www.example.com/").

    // $code = file("http://www.example.com/");
    //
    // foreach($code as $line_num => $line)
    // {
    //     echo "Line #$line_num....$value: " . htmlspecialchars($line) . "<br />";
    // }





    // 15. Write a PHP script to get last modified information of a file.

    // $file = basename(__FILE__);
    // echo 'Last modified: ' . date("F d Y H:i:s.", filemtime($file));





    // 16. Write a PHP script to count number of lines in a file.
    // $file = file(__FILE__);
    // $file = file('header.php');
    // echo '# lines in file: ' . sizeof($file);





    // 17. Write a PHP script to print current PHP version.
    // echo 'PHP version I\'m workin with: ' . phpversion();





    // 18. Write a PHP script to delay the program execution for the given number of seconds.
    // echo date('h:i:s') . "\n";
    //
    // sleep(3);
    //
    // echo date('h:i:s');




    // 19. Arithmetic operations on character variables: $d = 'A00'. Using this variable print the following numbers.
    // Sample Output:
        // A01
        // A02
        // A03
        // A04
        // A05

    // $d = 'A00';
    // $base = substr($d, 0, 2);
    // $num = (int)substr($d, 2);
    //
    // function logStr($b, $n) {
    //     echo $b . $n . "<br />";
    // }
    //
    // logStr($base, $num++);
    // logStr($base, $num++);
    // logStr($base, $num++);
    // logStr($base, $num++);
    // logStr($base, $num++);
    // logStr($base, $num++);






    // 20. Write a PHP script to get the last occurred error.
    // echo $test;
    // print_r(error_get_last());





    // 21. Write a PHP function to test whether a number is
    // greater than 30, 20 or 10 using ternary operator.

    // function checkNums($num) {
    //     $str = $num > 30
    //                 ? 'Num is greater than 30'
    //                 : ($num > 20
    //                     ? 'Num is greater than 20'
    //                     : ($num > 10
    //                         ? 'Num is greater than 10'
    //                         : 'Num is less than 10'));
    //     echo $str;
    // }
    // checkNums(30)





    // 22. Write a PHP script to get the full URL.
    // echo '<pre>' . var_export($_SERVER, true) . '</pre>';
    // $url = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . "://$_SERVER[HTTP_HOST]/$_SERVER[REQUEST_URI]";
    // NOTE that you don't use the quotes for a string while inside of double quotes
    // echo $url;





    // 23. Write a PHP script to compare the PHP version.
    // Note : Use version_compare() function and PHP_VERSION constant.

    // function x_compare_versions($v) {
    //     $result = version_compare(PHP_VERSION, $v);
    //     if (version_compare(PHP_VERSION, $v) == 0) {
    //         echo 'Up to date with version ' . PHP_VERSION;
    //     } elseif (version_compare(PHP_VERSION, $v) == -1) {
    //         echo $v . ' is higher than the current version ' . PHP_VERSION;
    //     } elseif (version_compare(PHP_VERSION, $v) == 1) {
    //         echo $v . ' is lower than the current version ' . PHP_VERSION;
    //     }
    // }
    // x_compare_versions('6.0.0');




    // 24. Write a PHP script to get the name of the owner of the current PHP script.

    // echo get_current_user();




    // 25. Write a PHP script to get the document root directory under which the
    // current script is executing, as defined in the server's configuration file.

    // echo $_SERVER['DOCUMENT_ROOT'];




    // 26. Write a PHP script to get the information about the operating system PHP is running on.
    // echo $_SERVER['HTTP_USER_AGENT'];




    // 27. Write a PHP script to print out all the credits for PHP.
    // phpcredits(CREDITS_ALL);




    // 28. Write a PHP script to get the directory path used for temporary files.
    // echo sys_get_temp_dir();





    // 29. Write a PHP script to get the names of the functions of a module.
    // Note : Find XML, JSON functions etc.
    // print_r(get_extension_funcs("xml"));
    // print_r(get_extension_funcs("json"));







    // 30. Write a PHP script to get the time of the last modification of the current page
    // echo "Last modified: " . date ("F d Y H:i:s.", getlastmod())."\n";







    function log_server_var() {
        echo "<pre>" . var_export($_SERVER, true) ."</pre>";
    }

?>


<!-- <?php include_once('header.php') ?> -->
