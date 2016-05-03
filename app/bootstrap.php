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

use PhpSchool\LearnYouPhp\Exercise\ConcernedAboutSeparation;
use PhpSchool\LearnYouPhp\Exercise\TimeServer;
use PhpSchool\LearnYouPhp\Exercise\DatabaseRead;
use PhpSchool\LearnYouPhp\Exercise\ExceptionalCoding;
use PhpSchool\PhpWorkshop\Application;
use PhpSchool\LearnYouPhp\Exercise\BabySteps;
use PhpSchool\LearnYouPhp\Exercise\FilteredLs;
use PhpSchool\LearnYouPhp\Exercise\HelloWorld;
use PhpSchool\LearnYouPhp\Exercise\MyFirstIo;
use PhpSchool\LearnYouPhp\Exercise\ArrayWeGo;
use PhpSchool\LearnYouPhp\Exercise\HttpJsonApi;
use PhpSchool\LearnYouPhp\Exercise\DependencyHeaven;

$app = new Application(null, __DIR__ . '/config.php');

$app->addExercise(HelloWorld::class);
$app->addExercise(\PhpSchool\LearnYouPhp\Exercise\HelloSomeone::class);
$app->addExercise(\PhpSchool\LearnYouPhp\Exercise\PeaceWalk::class);
$app->addExercise(\PhpSchool\LearnYouPhp\Exercise\ArrayWeMap::class);
$app->addExercise(\PhpSchool\LearnYouPhp\Exercise\ArrayWeReduce::class);
$app->addExercise(\PhpSchool\LearnYouPhp\Exercise\ArrayWeFilter::class);

$art = <<<ART

        _\/__
       | - - |
       |__+__|
      \_______/
       |_| |_|

      PHP SCHOOL
FUNCTIONAL PROGRAMMING
  FUNCTIONS AND ARRAY
ART;

$app->setLogo($art);
$app->setFgColour('blue');
$app->setBgColour('black');

return $app;
