<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProfilTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProfilTable Test Case
 */
class ProfilTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProfilTable
     */
    protected $Profil;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Profil',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Profil') ? [] : ['className' => ProfilTable::class];
        $this->Profil = $this->getTableLocator()->get('Profil', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Profil);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProfilTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
