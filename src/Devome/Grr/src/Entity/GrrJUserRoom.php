<?php

namespace Devome\Grr\Entity;

use Devome\Grr\Repository\GrrJUserRoomRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * GrrJUserRoom.
 */
#[ORM\Table(name: 'grr_j_user_room')]
#[ORM\Entity(repositoryClass: GrrJUserRoomRepository::class)]
class GrrJUserRoom
{
    #[ORM\Column(name: 'login', type: 'string', length: 40, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    public string $login = '';

    #[ORM\Column(name: 'id_room', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    public string|int $idRoom = '0';

}
