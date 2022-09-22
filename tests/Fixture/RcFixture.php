<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RcFixture
 */
class RcFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'rc';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idRC' => 1,
                'nomRC' => 'Lorem ipsum dolor sit amet',
                'prenomRC' => 'Lorem ipsum dolor sit amet',
                'emailRC' => 'Lorem ipsum dolor sit amet',
                'clients' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
