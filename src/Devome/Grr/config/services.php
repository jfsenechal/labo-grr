<?php

use Devome\Grr\Repository\GrrAreaRepository;
use Devome\Grr\Repository\GrrRoomRepository;
use Devome\Grr\Service\MyService;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\Dotenv\Dotenv;
use Twig\Environment;
use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

return static function (ContainerConfigurator $containerConfigurator): void {

    $services = $containerConfigurator
        ->services()
        ->defaults()
        #Automatically injects dependencies in your services
        ->autowire()
        #Automatically registers your services as commands, event subscribers, etc.
        ->autoconfigure()
        # Allows optimizing the container by removing unused services; this also means
        # fetching services directly from the container via $container->get() won't work
        ->public();

    #Makes classes in src/ available to be used as services;
    #this creates a service per class whose id is the fully-qualified class name

    $services->load('Devome\\Grr\\', __DIR__.'/../src/*')
        ->exclude([__DIR__.'/../src/{Controller,DependencyInjection,Entity,Tests}']);

    $services->set('myService', MyService::class)
        ->public();

};
