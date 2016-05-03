<?php

use function DI\factory;
use function DI\object;
use Interop\Container\ContainerInterface;
use PhpParser\Parser;
use PhpSchool\LearnYouPhp\Exercise\ArrayWeGo;
use PhpSchool\LearnYouPhp\Exercise\BabySteps;
use PhpSchool\LearnYouPhp\Exercise\ConcernedAboutSeparation;
use PhpSchool\LearnYouPhp\Exercise\DatabaseRead;
use PhpSchool\LearnYouPhp\Exercise\ExceptionalCoding;
use PhpSchool\LearnYouPhp\Exercise\FilteredLs;
use PhpSchool\LearnYouPhp\Exercise\HelloWorld;
use PhpSchool\LearnYouPhp\Exercise\HttpJsonApi;
use PhpSchool\LearnYouPhp\Exercise\MyFirstIo;
use PhpSchool\LearnYouPhp\Exercise\TimeServer;
use PhpSchool\LearnYouPhp\Exercise\DependencyHeaven;
use PhpSchool\LearnYouPhp\Exercise\HelloSomeone;
use PhpSchool\LearnYouPhp\Exercise\PeaceWalk;
use PhpSchool\LearnYouPhp\Exercise\ArrayWeMap;
use PhpSchool\LearnYouPhp\Exercise\ArrayWeReduce;
use PhpSchool\LearnYouPhp\Exercise\ArrayWeFilter;
use PhpSchool\LearnYouPhp\TcpSocketFactory;
use Symfony\Component\Filesystem\Filesystem;
use Faker\Factory as FakerFactory;

return [
    //Exercises
    BabySteps::class    => object(BabySteps::class),
    HelloWorld::class   => object(HelloWorld::class),
    HttpJsonApi::class  => object(HttpJsonApi::class),
    MyFirstIo::class    => factory(function (ContainerInterface $c) {
        return new MyFirstIo($c->get(Filesystem::class), FakerFactory::create());
    }),
    FilteredLs::class   => factory(function (ContainerInterface $c) {
        return new FilteredLs($c->get(Filesystem::class));
    }),
    ConcernedAboutSeparation::class   => factory(function (ContainerInterface $c) {
        return new ConcernedAboutSeparation(
            $c->get(Filesystem::class),
            FakerFactory::create(),
            $c->get(Parser::class)
        );
    }),
    ArrayWeGo::class    => factory(function (ContainerInterface $c) {
        return new ArrayWeGo($c->get(Filesystem::class), FakerFactory::create());
    }),
    ExceptionalCoding::class => factory(function (ContainerInterface $c) {
        return new ExceptionalCoding($c->get(Filesystem::class), FakerFactory::create());
    }),
    DatabaseRead::class => factory(function (ContainerInterface $c) {
        return new DatabaseRead(FakerFactory::create());
    }),
    TimeServer::class   => factory(function (ContainerInterface $c) {
        return new TimeServer(new TcpSocketFactory);
    }),
    DependencyHeaven::class  => factory(function (ContainerInterface $c) {
        return new DependencyHeaven(FakerFactory::create('fr_FR'));
    }),
    HelloSomeone::class  => factory(function (ContainerInterface $c) {
        return new HelloSomeone($c->get(Filesystem::class), FakerFactory::create());
    }),
    PeaceWalk::class  => factory(function (ContainerInterface $c) {
        return new PeaceWalk($c->get(Filesystem::class), FakerFactory::create());
    }),
    ArrayWeMap::class  => factory(function (ContainerInterface $c) {
        return new ArrayWeMap($c->get(Filesystem::class), FakerFactory::create());
    }),
    ArrayWeReduce::class  => factory(function (ContainerInterface $c) {
        return new ArrayWeReduce($c->get(Filesystem::class), FakerFactory::create());
    }),
    ArrayWeFilter::class  => factory(function (ContainerInterface $c) {
        return new ArrayWeFilter($c->get(Filesystem::class), FakerFactory::create());
    }),
];
