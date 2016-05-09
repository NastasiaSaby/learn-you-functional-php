<?php

ini_set('display_errors', 1);

date_default_timezone_set('Europe/London');
switch (true) {
    case (file_exists(__DIR__ . '/../vendor/autoload.php')):
        // Installed standalone
        require __DIR__ . '/../vendor/autoload.php';
        break;
    case (file_exists(__DIR__ . '/../../../autoload.php')):
        // Installed as a Composer dependency
        require __DIR__ . '/../../../autoload.php';
        break;
    case (file_exists('vendor/autoload.php')):
        // As a Composer dependency, relative to CWD
        require 'vendor/autoload.php';
        break;
    default:
        throw new RuntimeException('Unable to locate Composer autoloader; please run "composer install".');
}

use PhpSchool\PhpWorkshop\Application;
use PhpSchool\LearnYouPhp\Exercise\HelloWorld;
use PhpSchool\LearnYouPhp\Exercise\HelloSomeone;
use PhpSchool\LearnYouPhp\Exercise\PeaceWalk;
use PhpSchool\LearnYouPhp\Exercise\ArrayWeMap;
use PhpSchool\LearnYouPhp\Exercise\ArrayWeReduce;
use PhpSchool\LearnYouPhp\Exercise\ArrayWeFilter;

$app = new Application(null, __DIR__ . '/config.php');

$app->addExercise(HelloWorld::class);
$app->addExercise(HelloSomeone::class);
$app->addExercise(PeaceWalk::class);
$app->addExercise(ArrayWeMap::class);
$app->addExercise(ArrayWeReduce::class);
$app->addExercise(ArrayWeFilter::class);

$art = <<<ART

            _\/__
           | - - |
           |__+__|
          \_______/
           |_| |_|

         PHP SCHOOL
   FUNCTIONAL PROGRAMMING
CALLABLE FUNCTIONS AND ARRAY
ART;

$app->setLogo($art);
$app->setFgColour('blue');
$app->setBgColour('black');

return $app;
