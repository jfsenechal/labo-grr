<?php

use Symfony\Config\DoctrineConfig;
use function Symfony\Component\DependencyInjection\Loader\Configurator\Env;

return static function (DoctrineConfig $doctrine) {

    $doctrine->dbal()
        ->connection('default')
        ->url(env('DATABASE_URL')->resolve())
        ->charset('utf8mb4');

    $orm = $doctrine->orm();
    $orm->autoGenerateProxyClasses(true);

    $emMda = $orm->entityManager('default');
    $emMda->connection('default');
    $emMda->mapping('DevomeGrr')
        ->isBundle(false)
        ->type('attribute')
        ->dir('%kernel.project_dir%/src/Devome/Grr/src/Entity')
        ->prefix('Devome\Grr')
        ->alias('DevomeGrr');
};
