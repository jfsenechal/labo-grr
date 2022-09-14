<?php

namespace Devome\Grr\Entity;

use Devome\Grr\Repository\GrrAreaPeriodesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * GrrAreaPeriodes.
 */
#[ORM\Table(name: 'grr_area_periodes')]
#[ORM\Entity(repositoryClass: GrrAreaPeriodesRepository::class)]
class GrrAreaPeriodes
{
    #[ORM\Column(name: 'id_area', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    public string|int $idArea = '0';

    #[ORM\Column(name: 'num_periode', type: 'smallint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    public string|int $numPeriode = '0';

    #[ORM\Column(name: 'nom_periode', type: 'string', length: 100, nullable: false)]
    public string $nomPeriode = '';

    public function getIdArea(): ?int
    {
        return $this->idArea;
    }

    public function getNumPeriode(): ?int
    {
        return $this->numPeriode;
    }

    public function getNomPeriode(): ?string
    {
        return $this->nomPeriode;
    }

    public function setNomPeriode(string $nomPeriode): self
    {
        $this->nomPeriode = $nomPeriode;

        return $this;
    }
}
