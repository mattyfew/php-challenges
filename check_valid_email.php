<h1>Validate your email below!</h1>
<form method="post">
    <input type="text" name="email" >
    <button type="submit" name="button">Validate Email</button>
</form>


<?php

    $input = $_POST['email'];
    if (filter_var($input, FILTER_VALIDATE_EMAIL)) {
        echo "$input is a valid email";
    } else {
        echo "Ew no bueno yo";
    }

 ?>
