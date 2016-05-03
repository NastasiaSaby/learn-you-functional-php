<?php

namespace PhpSchool\LearnYouPhp\Exercise;

use PhpSchool\PhpWorkshop\Exercise\AbstractExercise;
use PhpSchool\PhpWorkshop\Exercise\CliExercise;
use PhpSchool\PhpWorkshop\Exercise\ExerciseInterface;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\ExerciseCheck\StdOutExerciseCheck;

/**
 * Class ArrayWeFilter
 * @package PhpSchool\LearnYouPhp\Exercise
 */
class ArrayWeFilter extends AbstractExercise implements ExerciseInterface, CliExercise
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Array we filter!';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'Exercice with array filter';
    }

    /**
     * @return array
     */
    public function getArgs()
    {
        return [1, 2, 3, 4, 5];
    }

    /**
     * @return ExerciseType
     */
    public function getType()
    {
        return ExerciseType::CLI();
    }
}
