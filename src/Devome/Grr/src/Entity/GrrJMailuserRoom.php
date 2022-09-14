<?php

namespace Devome\Grr\Entity;

use Devome\Grr\Repository\GrrJMailuserRoomRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * GrrJMailuserRoom.
 */
#[ORM\Table(name: 'grr_j_mailuser_room')]
#[ORM\Entity(repositoryClass: GrrJMailuserRoomRepository::class)]
class GrrJMailuserRoom
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
