<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProfilFixture
 */
class ProfilFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'profil';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'Oneidentity' => 'Lorem ipsum dolor sit amet',
                'IAM' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
