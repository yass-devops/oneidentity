<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ClientsFixture
 */
class ClientsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'nomclt' => 'Lorem ipsum dolor sit amet',
                'nomcontratclt' => 'Lorem ipsum dolor sit amet',
                'emailcontratclt' => 'Lorem ipsum dolor sit amet',
                'nomrespclt' => 'Lorem ipsum dolor sit amet',
                'actif' => 'Lorem ipsum dolor sit amet',
                'contratclt' => 'Lorem ipsum dolor sit amet',
                'type' => 'Lorem ipsum dolor sit amet',
                'solution' => 'Lorem ipsum dolor sit amet',
                'VersionIAM' => 'Lorem ipsum dolor sit amet',
                'idResp' => 1,
                'idChefP' => 1,
            ],
        ];
        parent::init();
    }
}
