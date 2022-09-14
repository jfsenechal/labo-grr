<?php

namespace Devome\Grr\DependencyInjection;

use Devome\Grr\Kernel;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\ErrorHandler\Debug;

class GrrContainer
{
    use ContainerAwareTrait;

    public function __construct()
    {
        $this->setContainer(self::init());
    }

    static function init(): ContainerInterface
    {
        $envKey = 'APP_ENV';
        $debugKey = 'APP_DEBUG';

        Debug::enable();

        $kernel = new Kernel(
            $_SERVER['APP_ENV'] ?? 'dev',
            $_SERVER['APP_DEBUG'] ?? ('prod' !== ($_SERVER['APP_ENV'] ?? 'dev'))
        );

        (new Dotenv($envKey, $debugKey))
            ->bootEnv(
                $kernel->getProjectDir().'/.env',
                'dev'
            );
        $kernel->boot();

        return $kernel->getContainer();
    }

    function getService(string $service): ?object
    {
        if ($this->container->has($service)) {
            return $this->container->get($service);
        }

        return null;
    }

}