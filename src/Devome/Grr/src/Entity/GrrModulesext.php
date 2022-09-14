<?php

namespace Devome\Grr\Entity;

use Devome\Grr\Repository\GrrModulesextRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * GrrModulesext.
 */
#[ORM\Table(name: 'grr_modulesext')]
#[ORM\Entity(repositoryClass: GrrModulesextRepository::class)]
class GrrModulesext
{
    #[ORM\Column(name: 'nom', type: 'string', length: 50, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    public string $nom;

    #[ORM\Column(name: 'actif', type: 'boolean', nullable: false)]
    public string|bool $actif = '0';

    #[ORM\Column(name: 'version', type: 'integer', nullable: false)]
    public int $version;

}
