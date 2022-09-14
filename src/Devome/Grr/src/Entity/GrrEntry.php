<?php

namespace Devome\Grr\Entity;

use Devome\Grr\Repository\GrrEntryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * GrrEntry.
 */
#[ORM\Table(name: 'grr_entry')]
#[ORM\Index(name: 'idxEndTime', columns: ['end_time'])]
#[ORM\Index(name: 'idxStartTime', columns: ['start_time'])]
#[ORM\Index(name: 'room_id', columns: ['room_id'])]
#[ORM\Entity(repositoryClass: GrrEntryRepository::class)]
class GrrEntry
{
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    public int $id;

    #[ORM\Column(name: 'start_time', type: 'integer', nullable: false)]
    public string|int $startTime = '0';

    #[ORM\Column(name: 'end_time', type: 'integer', nullable: false)]
    public string|int $endTime = '0';

    #[ORM\Column(name: 'entry_type', type: 'integer', nullable: false)]
    public string|int $entryType = '0';

    #[ORM\Column(name: 'repeat_id', type: 'integer', nullable: false)]
    public string|int $repeatId = '0';

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

    #[ORM\Column(name: 'statut_entry', type: 'string', length: 1, nullable: false, options: ['default' => '-', 'fixed' => true])]
    public string $statutEntry = '-';

    #[ORM\Column(name: 'option_reservation', type: 'integer', nullable: false)]
    public string|int $optionReservation = '0';

    #[ORM\Column(name: 'overload_desc', type: 'text', length: 65535, nullable: true)]
    public ?string $overloadDesc = null;

    #[ORM\Column(name: 'moderate', type: 'boolean', nullable: true)]
    public string|bool|null $moderate = '0';

    #[ORM\Column(name: 'jours', type: 'integer', nullable: false)]
    public string|int $jours = '0';

    #[ORM\Column(name: 'clef', type: 'integer', nullable: false)]
    public string|int $clef = '0';

    #[ORM\Column(name: 'courrier', type: 'integer', nullable: false)]
    public string|int $courrier = '0';

    #[ORM\Column(name: 'nbparticipantmax', type: 'integer', nullable: false)]
    public string|int $nbparticipantmax = '0';


}
