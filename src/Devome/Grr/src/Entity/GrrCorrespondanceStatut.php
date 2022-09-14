<?php

namespace Devome\Grr\Entity;

use Devome\Grr\Repository\GrrCorrespondanceStatutRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * GrrCorrespondanceStatut.
 */
#[ORM\Table(name: 'grr_correspondance_statut')]
#[ORM\Entity(repositoryClass: GrrCorrespondanceStatutRepository::class)]
class GrrCorrespondanceStatut
{
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    public int $id;

    #[ORM\Column(name: 'code_fonction', type: 'string', length: 30, nullable: false)]
    public string $codeFonction;

    #[ORM\Column(name: 'libelle_fonction', type: 'string', length: 200, nullable: false)]
    public string $libelleFonction;

    #[ORM\Column(name: 'statut_grr', type: 'string', length: 30, nullable: false)]
    public string $statutGrr;

}
