Write a program that prints the text "Hello someone" to the console with a callable function for each name given as argument.

----------------------------------------------------------------------
## HINTS
To remove the first argument, you can use `array_splice` as following :
```php
array_splice($argv, 0, 1);
```

To execute a function (callable) for each element of an array, you can use array_walk as following :
```php
$function = function($argument) {
    echo "Argument is".$name;
};

$arguments = ["argument1", "argument2"];
array_walk($arguments, $function);
```

Documentation on the `array_walk function` can be found by pointing your browser here:
  [http://php.net/manual/en/function.array-walk.php]()

Documentation on the `array_splice function` can be found by pointing your browser here:
  [http://php.net/manual/en/function.array-splice.php]()

----------------------------------------------------------------------
