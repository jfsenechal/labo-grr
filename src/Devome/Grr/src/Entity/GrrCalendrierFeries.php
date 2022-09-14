<?php

namespace Devome\Grr\Entity;

use Devome\Grr\Repository\GrrCalendrierFeriesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * GrrCalendrierFeries.
 */
#[ORM\Table(name: 'grr_calendrier_feries')]
#[ORM\Entity(repositoryClass: GrrCalendrierFeriesRepository::class)]
class GrrCalendrierFeries
{
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    public int $id;

    #[ORM\Column(name: 'DAY', type: 'integer', nullable: false)]
    public string|int $day = '0';

}
