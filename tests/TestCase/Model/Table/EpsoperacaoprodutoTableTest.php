<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EpsoperacaoprodutoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EpsoperacaoprodutoTable Test Case
 */
class EpsoperacaoprodutoTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.epsoperacaoproduto',
        'app.eps',
        'app.operacao',
        'app.canal',
        'app.produto',
        'app.configuracaoproduto',
        'app.produtovalores',
        'app.produtovariavel',
        'app.tipoprodutovariavel'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Epsoperacaoproduto') ? [] : ['className' => 'App\Model\Table\EpsoperacaoprodutoTable'];        $this->Epsoperacaoproduto = TableRegistry::get('Epsoperacaoproduto', $config);    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Epsoperacaoproduto);

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
