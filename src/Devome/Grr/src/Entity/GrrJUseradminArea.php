<?php

namespace Devome\Grr\Entity;

use Devome\Grr\Repository\GrrJUseradminAreaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * GrrJUseradminArea.
 */
#[ORM\Table(name: 'grr_j_useradmin_area')]
#[ORM\Entity(repositoryClass: GrrJUseradminAreaRepository::class)]
class GrrJUseradminArea
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
