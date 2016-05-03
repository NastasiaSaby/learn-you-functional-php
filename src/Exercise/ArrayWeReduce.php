<?php

namespace PhpSchool\LearnYouPhp\Exercise;

use PhpSchool\PhpWorkshop\Exercise\AbstractExercise;
use PhpSchool\PhpWorkshop\Exercise\CliExercise;
use PhpSchool\PhpWorkshop\Exercise\ExerciseInterface;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\ExerciseCheck\StdOutExerciseCheck;

/**
 * Class ArrayWeReduce
 * @package PhpSchool\LearnYouPhp\Exercise
 */
class ArrayWeReduce extends AbstractExercise implements ExerciseInterface, CliExercise
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'Array we reduce!';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'Exercice with array reduce';
    }

    /**
     * @return array
     */
    public function getArgs()
    {
        return ['Sarra', 'Helen', 'Anas'];
    }

    /**
     * @return ExerciseType
     */
    public function getType()
    {
        return ExerciseType::CLI();
    }
}
