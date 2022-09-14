<?php

namespace Devome\Grr\Entity;

use Devome\Grr\Repository\GrrRoomRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * GrrRoom.
 */
#[ORM\Table(name: 'grr_room')]
#[ORM\Entity(repositoryClass: GrrRoomRepository::class)]
class GrrRoom
{
    #[ORM\Column(name: 'id', type: 'integer', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'IDENTITY')]
    public int $id;

    #[ORM\Column(name: 'area_id', type: 'integer', nullable: false)]
    public string|int $areaId = '0';

    #[ORM\Column(name: 'room_name', type: 'string', length: 60, nullable: false)]
    public string $roomName = '';

    #[ORM\Column(name: 'description', type: 'string', length: 60, nullable: false)]
    public string $description = '';

    #[ORM\Column(name: 'capacity', type: 'integer', nullable: false)]
    public string|int $capacity = '0';

    #[ORM\Column(name: 'max_booking', type: 'smallint', nullable: false, options: ['default' => -1])]
    public string|int $maxBooking = '-1';

    #[ORM\Column(name: 'statut_room', type: 'string', length: 1, nullable: false, options: ['default' => 1, 'fixed' => true])]
    public string $statutRoom = '1';

    #[ORM\Column(name: 'show_fic_room', type: 'string', length: 1, nullable: false, options: ['default' => 'n', 'fixed' => true])]
    public string $showFicRoom = 'n';

    #[ORM\Column(name: 'picture_room', type: 'string', length: 50, nullable: false)]
    public string $pictureRoom = '';

    #[ORM\Column(name: 'comment_room', type: 'text', length: 65535, nullable: false)]
    public string $commentRoom;

    #[ORM\Column(name: 'show_comment', type: 'string', length: 1, nullable: false, options: ['default' => 'n', 'fixed' => true])]
    public string $showComment = 'n';

    #[ORM\Column(name: 'delais_max_resa_room', type: 'smallint', nullable: false, options: ['default' => -1])]
    public string|int $delaisMaxResaRoom = '-1';

    #[ORM\Column(name: 'delais_min_resa_room', type: 'integer', nullable: false)]
    public string|int $delaisMinResaRoom = '0';

    #[ORM\Column(name: 'allow_action_in_past', type: 'string', length: 1, nullable: false, options: ['default' => 'n', 'fixed' => true])]
    public string $allowActionInPast = 'n';

    #[ORM\Column(name: 'dont_allow_modify', type: 'string', length: 1, nullable: false, options: ['default' => 'n', 'fixed' => true])]
    public string $dontAllowModify = 'n';

    #[ORM\Column(name: 'order_display', type: 'smallint', nullable: false)]
    public string|int $orderDisplay = '0';

    #[ORM\Column(name: 'delais_option_reservation', type: 'smallint', nullable: false)]
    public string|int $delaisOptionReservation = '0';

    #[ORM\Column(name: 'type_affichage_reser', type: 'smallint', nullable: false)]
    public string|int $typeAffichageReser = '0';

    #[ORM\Column(name: 'moderate', type: 'boolean', nullable: true)]
    public string|bool|null $moderate = '0';

    #[ORM\Column(name: 'qui_peut_reserver_pour', type: 'string', length: 1, nullable: false, options: ['default' => 5, 'fixed' => true])]
    public string $quiPeutReserverPour = '5';

    #[ORM\Column(name: 'active_ressource_empruntee', type: 'string', length: 1, nullable: false, options: ['default' => 'y', 'fixed' => true])]
    public string $activeRessourceEmpruntee = 'y';

    #[ORM\Column(name: 'active_cle', type: 'string', length: 1, nullable: false, options: ['default' => 'y', 'fixed' => true])]
    public string $activeCle = 'y';

    #[ORM\Column(name: 'active_participant', type: 'boolean', nullable: false)]
    public string|bool $activeParticipant = '0';

    #[ORM\Column(name: 'who_can_see', type: 'smallint', nullable: false)]
    public string|int $whoCanSee = '0';

    #[ORM\Column(name: 'booking_range', type: 'smallint', nullable: false, options: ['default' => -1])]
    public string|int $bookingRange = '-1';

    #[ORM\Column(name: 'who_can_book', type: 'boolean', nullable: false, options: ['default' => 1])]
    public bool $whoCanBook = true;

}
