<?php
$function = function($name) {
 return $name%2==0;
};

array_shift($argv);
$result = array_filter($argv, $function);

print_r($result);