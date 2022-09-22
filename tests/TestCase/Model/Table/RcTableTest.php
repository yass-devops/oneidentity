<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RcTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RcTable Test Case
 */
class RcTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RcTable
     */
    protected $Rc;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Rc',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Rc') ? [] : ['className' => RcTable::class];
        $this->Rc = $this->getTableLocator()->get('Rc', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Rc);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\RcTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
