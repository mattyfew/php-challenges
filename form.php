<h2>Please input your name:</h2>

<form method="POST">
    <input type="text" name="name" />
    <button type="submit">Submit Name</button>
</form>


<?php
    $the_name = $_POST['name'];
    // NOTE: we must use double quotes because PHP checks
    // for variables. It does not do this with single quotes
    echo "<p>The name you submitted was: <strong>$the_name</strong></p>";
 ?>
