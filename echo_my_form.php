<!DOCTYPE html>
<html>
<body>

<h1>Here is what you sent us:</h1>

<?php

foreach ($_POST as $param_name => $param_val) {
    echo "Param : $param_name; Value : $param_val<br>\n "; 
}

?>

</body>
</html>