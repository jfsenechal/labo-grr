<?php

namespace Devome\Grr\Entity;

use Devome\Grr\Repository\GrrCalendrierJoursCycleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * GrrCalendrierJoursCycle.
 */
#[ORM\Table(name: 'grr_calendrier_jours_cycle')]
#[ORM\Entity(repositoryClass: GrrCalendrierJoursCycleRepository::class)]
class GrrCalendrierJoursCycle
{
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    public int $id;

    #[ORM\Column(name: 'DAY', type: 'integer', nullable: false)]
    public string|int $day = '0';

    #[ORM\Column(name: 'Jours', type: 'string', length: 20, nullable: false)]
    public string $jours = '';
}
