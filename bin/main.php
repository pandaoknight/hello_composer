<?php
require_once(dirname(__FILE__) . '/../lib/error_header.php');
require_once(__DIR__ . '/../vendor/autoload.php');


use pandaoknight\hello_composer_package\hello\Hello;

$hello = new Hello("Pandaoknight");
$hello->hello();

?>
