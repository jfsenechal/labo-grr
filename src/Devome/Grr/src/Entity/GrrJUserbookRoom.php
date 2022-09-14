<?php

namespace Devome\Grr\Entity;

use Devome\Grr\Repository\GrrJUserbookRoomRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * GrrJUserbookRoom.
 */
#[ORM\Table(name: 'grr_j_userbook_room')]
#[ORM\Entity(repositoryClass: GrrJUserbookRoomRepository::class)]
class GrrJUserbookRoom
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
