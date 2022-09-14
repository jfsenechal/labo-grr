<?php

namespace Devome\Grr\Entity;

use Devome\Grr\Repository\GrrSiteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * GrrSite.
 */
#[ORM\Table(name: 'grr_site')]
#[ORM\UniqueConstraint(name: 'code', columns: ['sitecode'])]
#[ORM\UniqueConstraint(name: 'name', columns: ['sitename'])]
#[ORM\Entity(repositoryClass: GrrSiteRepository::class)]
class GrrSite
{
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    public int $id;

    #[ORM\Column(name: 'sitecode', type: 'string', length: 10, nullable: true)]
    public ?string $sitecode = null;

    #[ORM\Column(name: 'sitename', type: 'string', length: 50, nullable: false)]
    public string $sitename = '';

    #[ORM\Column(name: 'adresse_ligne1', type: 'string', length: 38, nullable: true)]
    public ?string $adresseLigne1 = null;

    #[ORM\Column(name: 'adresse_ligne2', type: 'string', length: 38, nullable: true)]
    public ?string $adresseLigne2 = null;

    #[ORM\Column(name: 'adresse_ligne3', type: 'string', length: 38, nullable: true)]
    public ?string $adresseLigne3 = null;

    #[ORM\Column(name: 'cp', type: 'string', length: 5, nullable: true)]
    public ?string $cp = null;

    #[ORM\Column(name: 'ville', type: 'string', length: 50, nullable: true)]
    public ?string $ville = null;

    #[ORM\Column(name: 'pays', type: 'string', length: 50, nullable: true)]
    public ?string $pays = null;

    #[ORM\Column(name: 'tel', type: 'string', length: 25, nullable: true)]
    public ?string $tel = null;

    #[ORM\Column(name: 'fax', type: 'string', length: 25, nullable: true)]
    public ?string $fax = null;

}
