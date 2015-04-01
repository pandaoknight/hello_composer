<html>
    <head>
    </head>
    <body>
        <h2>Hello Composer!</h2>
<?php
require_once(__DIR__ . "/../lib/www_error_header.php");
require_once(__DIR__ . "/../vendor/autoload.php");


use pandaoknight\hello_composer_package\hello\Hello;

$hello = new Hello("panda");
print "<img src='".$hello->genIdenticon("panda")."' title='identicon'></img>";
?>
    </body>
</html>
