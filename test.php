<?php
$arguments = $argv;
$function = function($name) {
 echo "Hello ".$name."\n";
};

array_shift($arguments);

foreach ($arguments as $argument) {
 echo "Hello ".$argument."\n";
}
