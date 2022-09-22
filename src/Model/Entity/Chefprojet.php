<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Chefprojet Entity
 *
 * @property int $idchef
 * @property string $nomchef
 * @property string $prenomchef
 * @property string $emailchef
 * @property string|null $clientsCP
 */
class Chefprojet extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'nomchef' => true,
        'prenomchef' => true,
        'emailchef' => true,
        'clientsCP' => true,
    ];
}
