<?php

namespace Devome\Grr\Entity;

use Devome\Grr\Repository\GrrParticipantsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * GrrParticipants.
 */
#[ORM\Table(name: 'grr_participants')]
#[ORM\Entity(repositoryClass: GrrParticipantsRepository::class)]
class GrrParticipants
{
    #[ORM\Column(name: 'idresa', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    public int $idresa;

    #[ORM\Column(name: 'participant', type: 'string', length: 150, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    public string $participant;

}
