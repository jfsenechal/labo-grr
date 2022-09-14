<?php

use Devome\Grr\DependencyInjection\GrrContainer;
use Devome\Grr\Repository\GrrAreaRepository;
use Devome\Grr\Twig\TwigRender;

require_once dirname(__DIR__).'/vendor/autoload.php';

$container = new GrrContainer();
/**
 * @var GrrAreaRepository $areaRepository
 */
$areaRepository = $container->getService(GrrAreaRepository::class);
/**
 * @var TwigRender $myService
 */
$twig = $container->getService(TwigRender::class);

$areas = $areaRepository->findAll();
echo $twig->twig()->render('@Grr/default/index.html.twig', [
    'areas' => $areas,
]);
die();