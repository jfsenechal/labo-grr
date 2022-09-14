<?php

namespace Devome\Grr\Entity;

use Devome\Grr\Repository\GrrTypeAreaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * GrrTypeArea.
 */
#[ORM\Table(name: 'grr_type_area')]
#[ORM\Entity(repositoryClass: GrrTypeAreaRepository::class)]
class GrrTypeArea
{
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    public int $id;

    #[ORM\Column(name: 'type_name', type: 'string', length: 30, nullable: false)]
    public string $typeName = '';

    #[ORM\Column(name: 'order_display', type: 'smallint', nullable: false)]
    public string|int $orderDisplay = '0';

    #[ORM\Column(name: 'couleur', type: 'smallint', nullable: false)]
    public string|int $couleur = '0';

    #[ORM\Column(name: 'couleurhexa', type: 'string', length: 10, nullable: false)]
    public string $couleurhexa;

    #[ORM\Column(name: 'couleurtexte', type: 'string', length: 10, nullable: false, options: ['default' => '#000000'])]
    public string $couleurtexte = '#000000';

    #[ORM\Column(name: 'type_letter', type: 'string', length: 2, nullable: false, options: ['fixed' => true])]
    public string $typeLetter = '';

    #[ORM\Column(name: 'disponible', type: 'string', length: 1, nullable: false, options: ['default' => 2])]
    public string $disponible = '2';

}
