<?php

namespace Devome\Grr\Entity;

use Devome\Grr\Repository\GrrRepeatRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * GrrRepeat.
 */
#[ORM\Table(name: 'grr_repeat')]
#[ORM\Entity(repositoryClass: GrrRepeatRepository::class)]
class GrrRepeat
{
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    public int $id;

    #[ORM\Column(name: 'start_time', type: 'integer', nullable: false)]
    public string|int $startTime = '0';

    #[ORM\Column(name: 'end_time', type: 'integer', nullable: false)]
    public string|int $endTime = '0';

    #[ORM\Column(name: 'rep_type', type: 'integer', nullable: false)]
    public string|int $repType = '0';

    #[ORM\Column(name: 'end_date', type: 'integer', nullable: false)]
    public string|int $endDate = '0';

    #[ORM\Column(name: 'rep_opt', type: 'string', length: 32, nullable: false)]
    public string $repOpt = '';

    #[ORM\Column(name: 'room_id', type: 'integer', nullable: false, options: ['default' => 1])]
    public int $roomId = 1;

    #[ORM\Column(name: 'timestamp', type: 'datetime', nullable: false, options: ['default' => 'CURRENT_TIMESTAMP'])]
    public string|\DateTime $timestamp = 'CURRENT_TIMESTAMP';

    #[ORM\Column(name: 'create_by', type: 'string', length: 100, nullable: false)]
    public string $createBy = '';

    #[ORM\Column(name: 'beneficiaire_ext', type: 'string', length: 200, nullable: false)]
    public string $beneficiaireExt = '';

    #[ORM\Column(name: 'beneficiaire', type: 'string', length: 100, nullable: false)]
    public string $beneficiaire = '';

    #[ORM\Column(name: 'name', type: 'string', length: 80, nullable: false)]
    public string $name = '';

    #[ORM\Column(name: 'type', type: 'string', length: 2, nullable: false, options: ['default' => 'A', 'fixed' => true])]
    public string $type = 'A';

    #[ORM\Column(name: 'description', type: 'text', length: 65535, nullable: true)]
    public ?string $description = null;

    #[ORM\Column(name: 'rep_num_weeks', type: 'boolean', nullable: true)]
    public string|bool|null $repNumWeeks = '0';

    #[ORM\Column(name: 'overload_desc', type: 'text', length: 65535, nullable: true)]
    public ?string $overloadDesc = null;

    #[ORM\Column(name: 'jours', type: 'boolean', nullable: false)]
    public string|bool $jours = '0';

    #[ORM\Column(name: 'courrier', type: 'integer', nullable: false)]
    public string|int $courrier = '0';

    #[ORM\Column(name: 'nbparticipantmax', type: 'integer', nullable: false)]
    public string|int $nbparticipantmax = '0';

}
