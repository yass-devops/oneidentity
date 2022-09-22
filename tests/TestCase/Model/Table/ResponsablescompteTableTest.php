<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResponsablescompteTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResponsablescompteTable Test Case
 */
class ResponsablescompteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ResponsablescompteTable
     */
    protected $Responsablescompte;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Responsablescompte',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Responsablescompte') ? [] : ['className' => ResponsablescompteTable::class];
        $this->Responsablescompte = $this->getTableLocator()->get('Responsablescompte', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Responsablescompte);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ResponsablescompteTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
