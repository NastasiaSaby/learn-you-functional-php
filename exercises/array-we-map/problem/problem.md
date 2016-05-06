Write a program that transform the arguments given by surrounding them by `-` and print the array.

----------------------------------------------------------------------
## HINTS
You can use `var_dump` to print an array.

To transform an array to another array where you execute an algorithm on each element, you can use `array_map` as following :

```php
$function = function($argument) {
    return $argument.'.suffix';
};

$arguments = ['argument1', 'argument2'];
$result = array_map($function, $arguments);
```

Documentation on the `array_map function` can be found by pointing your browser here:
  [http://php.net/manual/en/function.array-map.php]()

----------------------------------------------------------------------
