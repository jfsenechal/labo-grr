<?php

namespace Devome\Grr\Entity;

use Devome\Grr\Repository\GrrUtilisateursRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * GrrUtilisateurs.
 */
#[ORM\Table(name: 'grr_utilisateurs')]
#[ORM\Entity(repositoryClass: GrrUtilisateursRepository::class)]
class GrrUtilisateurs
{
    #[ORM\Column(name: 'login', type: 'string', length: 40, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    public string $login = '';

    #[ORM\Column(name: 'nom', type: 'string', length: 30, nullable: false)]
    public string $nom = '';

    #[ORM\Column(name: 'prenom', type: 'string', length: 30, nullable: false)]
    public string $prenom = '';

    #[ORM\Column(name: 'password', type: 'string', length: 32, nullable: false)]
    public string $password = '';

    #[ORM\Column(name: 'changepwd', type: 'boolean', nullable: false)]
    public string|bool $changepwd = '0';

    #[ORM\Column(name: 'email', type: 'string', length: 100, nullable: false)]
    public string $email = '';

    #[ORM\Column(name: 'statut', type: 'string', length: 30, nullable: false)]
    public string $statut = '';

    #[ORM\Column(name: 'etat', type: 'string', length: 20, nullable: false)]
    public string $etat = '';

    #[ORM\Column(name: 'default_site', type: 'smallint', nullable: false)]
    public string|int $defaultSite = '0';

    #[ORM\Column(name: 'default_area', type: 'smallint', nullable: false)]
    public string|int $defaultArea = '0';

    #[ORM\Column(name: 'default_room', type: 'smallint', nullable: false)]
    public string|int $defaultRoom = '0';

    #[ORM\Column(name: 'default_style', type: 'string', length: 50, nullable: false)]
    public string $defaultStyle = '';

    #[ORM\Column(name: 'default_list_type', type: 'string', length: 50, nullable: false)]
    public string $defaultListType = '';

    #[ORM\Column(name: 'default_language', type: 'string', length: 3, nullable: false, options: ['fixed' => true])]
    public string $defaultLanguage = '';

    #[ORM\Column(name: 'source', type: 'string', length: 10, nullable: false, options: ['default' => 'local'])]
    public string $source = 'local';

}
