<?php

namespace PhpSchool\LearnYouPhp\Exercise;

use Faker\Generator;
use PhpSchool\PhpWorkshop\Check\FunctionRequirementsCheck;
use PhpSchool\PhpWorkshop\Exercise\AbstractExercise;
use PhpSchool\PhpWorkshop\Exercise\CliExercise;
use PhpSchool\PhpWorkshop\Exercise\ExerciseInterface;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\Exercise\TemporaryDirectoryTrait;
use PhpSchool\PhpWorkshop\ExerciseCheck\FunctionRequirementsExerciseCheck;
use PhpSchool\PhpWorkshop\ExerciseCheck\StdOutExerciseCheck;
use PhpSchool\PhpWorkshop\ExerciseDispatcher;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Class ArrayWeGo
 * @package PhpSchool\LearnYouPhp\Exercise
 * @author Michael Woodward <mikeymike.mw@gmail.com>
 */
class HelloSomeone extends AbstractExercise implements ExerciseInterface, FunctionRequirementsExerciseCheck, CliExercise
{
    use TemporaryDirectoryTrait;
    
    /**
     * @var Filesystem
     */
    private $filesystem;

    /**
     * @var Generator
     */
    private $faker;

    /**
     * @param Filesystem $filesystem
     * @param Generator $faker
     */
    public function __construct(Filesystem $filesystem, Generator $faker)
    {
        $this->filesystem   = $filesystem;
        $this->faker        = $faker;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'Callback Heaven!';
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return 'Filter an array of file paths and map to SplFile objects';
    }

    /**
     * @return array
     */
    public function getArgs()
    {
        return ['Good', 'Job'];
    }

    /**
     * @return null
     */
    public function tearDown()
    {
        $this->filesystem->remove($this->getTemporaryPath());
    }

    /**
     * @return string[]
     */
    public function getRequiredFunctions()
    {
        return [];
    }

    /**
     * @return string[]
     */
    public function getBannedFunctions()
    {
        return ['basename'];
    }

    /**
     * @return ExerciseType
     */
    public function getType()
    {
        return ExerciseType::CLI();
    }

    /**
     * @param ExerciseDispatcher $dispatcher
     */
    public function configure(ExerciseDispatcher $dispatcher)
    {
        $dispatcher->requireCheck(FunctionRequirementsCheck::class, $dispatcher::CHECK_AFTER);
    }
}
