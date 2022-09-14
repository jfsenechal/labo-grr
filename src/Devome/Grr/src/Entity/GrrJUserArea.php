<?php

namespace Devome\Grr\Entity;

use Devome\Grr\Repository\GrrJUserAreaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * GrrJUserArea.
 */
#[ORM\Table(name: 'grr_j_user_area')]
#[ORM\Entity(repositoryClass: GrrJUserAreaRepository::class)]
class GrrJUserArea
{
    #[ORM\Column(name: 'login', type: 'string', length: 40, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    public string $login = '';

    #[ORM\Column(name: 'id_area', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    public string|int $idArea = '0';

}
