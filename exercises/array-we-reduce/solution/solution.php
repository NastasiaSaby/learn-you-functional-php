<?php
$function = function($output, $name) {
    return $output.'-'.$name.'-';
};

array_splice($argv, 0, 1);
$result = array_reduce($argv, $function);

var_dump($result);