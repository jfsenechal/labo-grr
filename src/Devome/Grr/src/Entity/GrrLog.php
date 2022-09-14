<?php

namespace Devome\Grr\Entity;

use Devome\Grr\Repository\GrrLogRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * GrrLog.
 */
#[ORM\Table(name: 'grr_log')]
#[ORM\Entity(repositoryClass: GrrLogRepository::class)]
class GrrLog
{
    #[ORM\Column(name: 'LOGIN', type: 'string', length: 40, nullable: false)]
    public string $login = '';

    #[ORM\Column(name: 'START', type: 'datetime', nullable: false, options: ['default' => '1970-01-01 00:00:00'])]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    public string|\DateTime $start = '1970-01-01 00:00:00';

    #[ORM\Column(name: 'SESSION_ID', type: 'string', length: 64, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'NONE')]
    public string $sessionId = '';

    #[ORM\Column(name: 'REMOTE_ADDR', type: 'string', length: 40, nullable: false)]
    public string $remoteAddr = '';

    #[ORM\Column(name: 'USER_AGENT', type: 'string', length: 200, nullable: false)]
    public string $userAgent = '';

    #[ORM\Column(name: 'REFERER', type: 'string', length: 200, nullable: false)]
    public string $referer = '';

    #[ORM\Column(name: 'AUTOCLOSE', type: 'boolean', nullable: false)]
    public string|bool $autoclose = '0';

    #[ORM\Column(name: 'END', type: 'datetime', nullable: false, options: ['default' => '1970-01-01 00:00:00'])]
    public string|\DateTime $end = '1970-01-01 00:00:00';


}
