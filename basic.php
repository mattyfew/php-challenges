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

    $url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';
    print_r('<pre>' . parse_url($url) . '');

?>


<!-- <?php include_once('header.php') ?> -->
