<?php

namespace Devome\Grr\Controller;

use Devome\Grr\Entity\GrrArea;
use Devome\Grr\Repository\GrrAreaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Attribute\AsController;
use Symfony\Component\Routing\Annotation\Route;

#[AsController]
#[Route(path: '/')]
class DefaultController extends AbstractController
{
    public function __construct(private GrrAreaRepository $areaRepository)
    {
    }

    #[Route(path: '/', name: 'grr_home')]
    public function home()
    {
        $areas = $this->areaRepository->findAll();

        return $this->render(
            '@Grr/default/index.html.twig',
            [
                'areas' => $areas,
            ]
        );
    }

    #[Route(path: '/areas', name: 'grr_area_index')]
    public function area()
    {
        $areas = $this->areaRepository->findAll();

        return $this->render(
            '@Grr/default/area.html.twig',
            [
                'areas' => $areas,
            ]
        );
    }

        #[Route(path: '/{id}/show', name: 'grr_area_show')]
    public function areaShow(GrrArea $area)
    {
        return $this->render(
            '@Grr/default/show.html.twig',
            [
                'area' => $area,
            ]
        );
    }
}