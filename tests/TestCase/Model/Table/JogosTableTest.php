<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JogosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JogosTable Test Case
 */
class JogosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\JogosTable
     */
    public $Jogos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.jogos',
        'app.categorias_jogos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Jogos') ? [] : ['className' => JogosTable::class];
        $this->Jogos = TableRegistry::get('Jogos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Jogos);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
