<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Responsableserviceprodop Entity
 *
 * @property int $idRespProdops
 * @property string $nomRespProdops
 * @property string $prenomRespProdops
 * @property string $emailRespProdops
 */
class Responsableserviceprodop extends Entity
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
        'nomRespProdops' => true,
        'prenomRespProdops' => true,
        'emailRespProdops' => true,
    ];
}
