<?php

namespace Devome\Grr\Entity;

use Devome\Grr\Repository\GrrJUseradminSiteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * GrrJUseradminSite.
 */
#[ORM\Table(name: 'grr_j_useradmin_site')]
#[ORM\Entity(repositoryClass: GrrJUseradminSiteRepository::class)]
class GrrJUseradminSite
{
    #[ORM\Column(name: 'login', type: 'string', length: 40, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    public string $login = '';

    #[ORM\Column(name: 'id_site', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    public string|int $idSite = '0';

}
