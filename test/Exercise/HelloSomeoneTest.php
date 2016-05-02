<?php


namespace PhpSchool\LearnYouPhpTest\Exercise;

use PhpSchool\LearnYouPhp\Exercise\HelloSomeone;
use PhpSchool\PhpWorkshop\Exercise\ExerciseType;
use PhpSchool\PhpWorkshop\Solution\SolutionInterface;
use PHPUnit_Framework_TestCase;

/**
 * Class HelloWorldTest
 * @package PhpSchool\LearnYouPhpTest\Exercise
 * @author Aydin Hassan <aydin@hotmail.co.uk>
 */
class HelloSomeoneTest extends PHPUnit_Framework_TestCase
{
    public function testHelloWorldExercise()
    {
        $e = new HelloSomeone();
        $this->assertEquals('Hello someone!', $e->getName());
        $this->assertEquals('Hello world exercice with name', $e->getDescription());
        $this->assertEquals(ExerciseType::CLI, $e->getType());

        $this->assertEquals(['Sarra'], $e->getArgs());

        $this->assertInstanceOf(SolutionInterface::class, $e->getSolution());
        $this->assertFileExists(realpath($e->getProblem()));
        $this->assertNull($e->tearDown());
    }
}
