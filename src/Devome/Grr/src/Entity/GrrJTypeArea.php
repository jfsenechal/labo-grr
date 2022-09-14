<?php

namespace Devome\Grr\Entity;

use Devome\Grr\Repository\GrrJTypeAreaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * GrrJTypeArea.
 */
#[ORM\Table(name: 'grr_j_type_area')]
#[ORM\Entity(repositoryClass: GrrJTypeAreaRepository::class)]
class GrrJTypeArea
{
    #[ORM\Column(name: 'id_type', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    public string|int $idType = '0';

    #[ORM\Column(name: 'id_area', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    public string|int $idArea = '0';

}
