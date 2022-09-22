<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResponsablecompteTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResponsablecompteTable Test Case
 */
class ResponsablecompteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ResponsablecompteTable
     */
    protected $Responsablecompte;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Responsablecompte',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Responsablecompte') ? [] : ['className' => ResponsablecompteTable::class];
        $this->Responsablecompte = $this->getTableLocator()->get('Responsablecompte', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Responsablecompte);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ResponsablecompteTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
