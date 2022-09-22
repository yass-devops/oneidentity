<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property int $id
 *  @property string $nomclt
 * @property string $nomcontratclt
 * @property string $emailcontratclt
 * @property string $nomrespclt
 * @property string $actif
 * @property string $contratclt
 * @property string $type
 * @property string $solution
 * @property string $VersionIAM
 * @property int $idResp
 * @property int $idChefP
 */
class Client extends Entity
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
    public $_accessible = [
        'nomclt' => true,
        'nomcontratclt' => true,
        'emailcontratclt' => true,
        'nomrespclt' => true,
        'actif' => true,
        'contratclt' => true,
        'type' => true,
        'solution' => true,
        'VersionIAM' => true,
        'idResp' => true,
        'idChefP' => true,
    ];
   
}
