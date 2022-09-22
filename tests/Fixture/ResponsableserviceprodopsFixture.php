<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ResponsableserviceprodopsFixture
 */
class ResponsableserviceprodopsFixture extends TestFixture
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
                'idRespProdops' => 1,
                'nomRespProdops' => 'Lorem ipsum dolor sit amet',
                'prenomRespProdops' => 'Lorem ipsum dolor sit amet',
                'emailRespProdops' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
