<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DesignationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DesignationsTable Test Case
 */
class DesignationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DesignationsTable
     */
    public $Designations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.designations',
        'app.employees'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Designations') ? [] : ['className' => 'App\Model\Table\DesignationsTable'];
        $this->Designations = TableRegistry::get('Designations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Designations);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
