<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoriasJogosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoriasJogosTable Test Case
 */
class CategoriasJogosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoriasJogosTable
     */
    public $CategoriasJogos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.categorias_jogos',
        'app.jogos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CategoriasJogos') ? [] : ['className' => CategoriasJogosTable::class];
        $this->CategoriasJogos = TableRegistry::get('CategoriasJogos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CategoriasJogos);

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
