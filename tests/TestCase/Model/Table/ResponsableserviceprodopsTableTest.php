<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResponsableserviceprodopsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResponsableserviceprodopsTable Test Case
 */
class ResponsableserviceprodopsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ResponsableserviceprodopsTable
     */
    protected $Responsableserviceprodops;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Responsableserviceprodops',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Responsableserviceprodops') ? [] : ['className' => ResponsableserviceprodopsTable::class];
        $this->Responsableserviceprodops = $this->getTableLocator()->get('Responsableserviceprodops', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Responsableserviceprodops);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ResponsableserviceprodopsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
