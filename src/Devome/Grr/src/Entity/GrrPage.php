<?php

namespace Devome\Grr\Entity;

use Devome\Grr\Repository\GrrPageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * GrrPage.
 */
#[ORM\Table(name: 'grr_page')]
#[ORM\Entity(repositoryClass: GrrPageRepository::class)]
class GrrPage
{
    #[ORM\Column(name: 'nom', type: 'string', length: 30, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    public string $nom;

    #[ORM\Column(name: 'valeur', type: 'text', length: 0, nullable: false)]
    public string $valeur;

}
