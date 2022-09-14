<?php

namespace Devome\Grr\Service;

use Devome\Grr\Repository\GrrAreaRepository;

class MyService
{
    public function __construct(private GrrAreaRepository $areaRepository)
    {

    }

    public function getAreas()
    {
        return $this->areaRepository->findAll();
    }
}