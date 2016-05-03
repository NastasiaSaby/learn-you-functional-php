<?php
$function = function($name) {
    return '-'.$name.'-';
};

array_splice($argv, 0, 1);
$result = array_map($function, $argv);

var_dump($result);