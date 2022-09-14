<?php

namespace Devome\Grr\Entity;

use Devome\Grr\Repository\GrrCalendrierVacancesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * GrrCalendrierVacances.
 */
#[ORM\Table(name: 'grr_calendrier_vacances')]
#[ORM\Entity(repositoryClass: GrrCalendrierVacancesRepository::class)]
class GrrCalendrierVacances
{
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    public int $id;

    #[ORM\Column(name: 'DAY', type: 'integer', nullable: false)]
    public string|int $day = '0';

}
