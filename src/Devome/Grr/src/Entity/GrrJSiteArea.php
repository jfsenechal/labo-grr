<?php

namespace Devome\Grr\Entity;

use Devome\Grr\Repository\GrrJSiteAreaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * GrrJSiteArea.
 */
#[ORM\Table(name: 'grr_j_site_area')]
#[ORM\Entity(repositoryClass: GrrJSiteAreaRepository::class)]
class GrrJSiteArea
{
    #[ORM\Column(name: 'id_site', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    public string|int $idSite = '0';

    #[ORM\Column(name: 'id_area', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    public string|int $idArea = '0';

}
