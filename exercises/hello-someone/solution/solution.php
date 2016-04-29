<?php

$var = function() use($argv) {
    array_splice($argv, 0, 1);
    var_dump($argv);
};

$var();