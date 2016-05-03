<?php
$function = function($number) {
    return $number %2 == 0;
};

array_splice($argv, 0, 1);
$result = array_filter($argv, $function);

var_dump($result);