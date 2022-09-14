<?php

namespace Devome\Grr\Entity;

use Devome\Grr\Repository\GrrOverloadRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * GrrOverload.
 */
#[ORM\Table(name: 'grr_overload')]
#[ORM\UniqueConstraint(name: 'id', columns: ['id'])]
#[ORM\Entity(repositoryClass: GrrOverloadRepository::class)]
class GrrOverload
{
    #[ORM\Column(name: 'id_area', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    public int $idArea;

    #[ORM\Column(name: 'fieldname', type: 'string', length: 55, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    public string $fieldname = '';

    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    public int $id;

    #[ORM\Column(name: 'fieldtype', type: 'string', length: 25, nullable: false)]
    public string $fieldtype = '';

    #[ORM\Column(name: 'fieldlist', type: 'text', length: 65535, nullable: false)]
    public string $fieldlist;

    #[ORM\Column(name: 'obligatoire', type: 'string', length: 1, nullable: false, options: ['default' => 'n', 'fixed' => true])]
    public string $obligatoire = 'n';

    #[ORM\Column(name: 'affichage', type: 'string', length: 1, nullable: false, options: ['default' => 'n', 'fixed' => true])]
    public string $affichage = 'n';

    #[ORM\Column(name: 'confidentiel', type: 'string', length: 1, nullable: false, options: ['default' => 'n', 'fixed' => true])]
    public string $confidentiel = 'n';

    #[ORM\Column(name: 'overload_mail', type: 'string', length: 1, nullable: false, options: ['default' => 'n', 'fixed' => true])]
    public string $overloadMail = 'n';

    #[ORM\Column(name: 'mail_spec', type: 'text', length: 65535, nullable: false)]
    public string $mailSpec;

}
