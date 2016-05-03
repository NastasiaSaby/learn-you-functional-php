<?php

$function = function($name) {
    echo "Hello ".$name."\n";
};

array_splice($argv, 0, 1);
array_walk($argv, $function);
