<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EpsmetaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EpsmetaTable Test Case
 */
class EpsmetaTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.epsmeta',
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
        $config = TableRegistry::exists('Epsmeta') ? [] : ['className' => 'App\Model\Table\EpsmetaTable'];
        $this->Epsmeta = TableRegistry::get('Epsmeta', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Epsmeta);

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
