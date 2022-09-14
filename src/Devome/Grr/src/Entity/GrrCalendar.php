<?php

namespace Devome\Grr\Entity;

use Devome\Grr\Repository\GrrCalendarRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * GrrCalendar.
 */
#[ORM\Table(name: 'grr_calendar')]
#[ORM\Entity(repositoryClass: GrrCalendarRepository::class)]
class GrrCalendar
{
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    public int $id;

    #[ORM\Column(name: 'DAY', type: 'integer', nullable: false)]
    public string|int $day = '0';

}
