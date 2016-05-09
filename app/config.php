<?php

use function DI\factory;
use function DI\object;
use PhpParser\Parser;
use PhpSchool\LearnYouPhp\Exercise\HelloWorld;
use PhpSchool\LearnYouPhp\Exercise\HelloSomeone;
use PhpSchool\LearnYouPhp\Exercise\PeaceWalk;
use PhpSchool\LearnYouPhp\Exercise\ArrayWeMap;
use PhpSchool\LearnYouPhp\Exercise\ArrayWeReduce;
use PhpSchool\LearnYouPhp\Exercise\ArrayWeFilter;

return [
    //Exercises
    HelloWorld::class   => object(HelloWorld::class),
    HelloSomeone::class  => object(HelloSomeone::class),
    PeaceWalk::class  => object(PeaceWalk::class),
    ArrayWeMap::class  => object(ArrayWeMap::class),
    ArrayWeReduce::class  => object(ArrayWeReduce::class),
    ArrayWeFilter::class  => object(ArrayWeFilter::class),
];
