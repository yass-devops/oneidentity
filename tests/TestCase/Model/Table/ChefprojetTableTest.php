<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChefprojetTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChefprojetTable Test Case
 */
class ChefprojetTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ChefprojetTable
     */
    protected $Chefprojet;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Chefprojet',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Chefprojet') ? [] : ['className' => ChefprojetTable::class];
        $this->Chefprojet = $this->getTableLocator()->get('Chefprojet', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Chefprojet);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ChefprojetTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
