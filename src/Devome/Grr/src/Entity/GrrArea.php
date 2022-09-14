<?php

namespace Devome\Grr\Entity;

use Devome\Grr\Repository\GrrAreaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * GrrArea.
 */
#[ORM\Table(name: 'grr_area')]
#[ORM\Entity(repositoryClass: GrrAreaRepository::class)]
class GrrArea
{
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    public int $id;

    #[ORM\Column(name: 'area_name', type: 'string', length: 30, nullable: false)]
    public string $areaName = '';

    #[ORM\Column(name: 'access', type: 'string', length: 1, nullable: false, options: ['fixed' => true])]
    public string $access = '';

    #[ORM\Column(name: 'order_display', type: 'smallint', nullable: false)]
    public string|int $orderDisplay = '0';

    #[ORM\Column(name: 'ip_adr', type: 'string', length: 15, nullable: false)]
    public string $ipAdr = '';

    #[ORM\Column(name: 'morningstarts_area', type: 'smallint', nullable: false)]
    public string|int $morningstartsArea = '0';

    #[ORM\Column(name: 'eveningends_area', type: 'smallint', nullable: false)]
    public string|int $eveningendsArea = '0';

    #[ORM\Column(name: 'duree_max_resa_area', type: 'integer', nullable: false, options: ['default' => -1])]
    public int $dureeMaxResaArea = -1;

    #[ORM\Column(name: 'resolution_area', type: 'integer', nullable: false)]
    public string|int $resolutionArea = '0';

    #[ORM\Column(name: 'eveningends_minutes_area', type: 'smallint', nullable: false)]
    public string|int $eveningendsMinutesArea = '0';

    #[ORM\Column(name: 'weekstarts_area', type: 'smallint', nullable: false)]
    public string|int $weekstartsArea = '0';

    #[ORM\Column(name: 'twentyfourhour_format_area', type: 'smallint', nullable: false)]
    public string|int $twentyfourhourFormatArea = '0';

    #[ORM\Column(name: 'calendar_default_values', type: 'string', length: 1, nullable: false, options: ['default' => 'y', 'fixed' => true])]
    public string $calendarDefaultValues = 'y';

    #[ORM\Column(name: 'enable_periods', type: 'string', length: 1, nullable: false, options: ['default' => 'n', 'fixed' => true])]
    public string $enablePeriods = 'n';

    #[ORM\Column(name: 'display_days', type: 'string', length: 7, nullable: false, options: ['default' => 'yyyyyyy'])]
    public string $displayDays = 'yyyyyyy';

    #[ORM\Column(name: 'id_type_par_defaut', type: 'integer', nullable: false, options: ['default' => -1])]
    public int $idTypeParDefaut = -1;

    #[ORM\Column(name: 'duree_par_defaut_reservation_area', type: 'integer', nullable: false)]
    public string|int $dureeParDefautReservationArea = '0';

    #[ORM\Column(name: 'max_booking', type: 'smallint', nullable: false, options: ['default' => -1])]
    public string|int $maxBooking = '-1';


}
