<?php

namespace Devome\Grr\Entity;

use Devome\Grr\Repository\GrrSettingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * GrrSetting.
 */
#[ORM\Table(name: 'grr_setting')]
#[ORM\Entity(repositoryClass: GrrSettingRepository::class)]
class GrrSetting
{
    #[ORM\Column(name: 'NAME', type: 'string', length: 32, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    public string $name = '';

    #[ORM\Column(name: 'VALUE', type: 'text', length: 65535, nullable: false)]
    public string $value;

}
