<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ChefprojetFixture
 */
class ChefprojetFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'chefprojet';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'idchef' => 1,
                'nomchef' => 'Lorem ipsum dolor sit amet',
                'prenomchef' => 'Lorem ipsum dolor sit amet',
                'emailchef' => 'Lorem ipsum dolor sit amet',
                'clientsCP' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
