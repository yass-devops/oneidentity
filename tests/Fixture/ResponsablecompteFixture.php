<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ResponsablecompteFixture
 */
class ResponsablecompteFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'responsablecompte';
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
                'nom' => 'Lorem ipsum dolor sit amet',
                'prenom' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
