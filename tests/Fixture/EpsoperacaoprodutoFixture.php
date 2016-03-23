<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EpsoperacaoprodutoFixture
 *
 */
class EpsoperacaoprodutoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'epsoperacaoproduto';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Chave de identificacao incremental', 'autoIncrement' => true, 'precision' => null],
        'eps_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Chave estrangeira para relacionamento com EPS', 'precision' => null, 'autoIncrement' => null],
        'operacao_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Chave estrangeira para relacionamento com operacao', 'precision' => null, 'autoIncrement' => null],
        'produto_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'ativo' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => 'Disponibilidade do produto para uma operacao de uma eps', 'precision' => null, 'autoIncrement' => null],
        'meta_incluido_usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Codigo do usuario que inseriu a linha', 'precision' => null, 'autoIncrement' => null],
        'meta_incluido_data' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Data da inclusao da linha', 'precision' => null],
        'meta_alterado_usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Codigo do usuario que alterou a linha', 'precision' => null, 'autoIncrement' => null],
        'meta_alterado_data' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Data da alteracao da linha', 'precision' => null],
        'meta_excluido_usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Codigo do usuario que excluiu a linha', 'precision' => null, 'autoIncrement' => null],
        'meta_excluido_data' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Data da exclusao da linha', 'precision' => null],
        '_indexes' => [
            'fk_epsOperacao_eps1_idx' => ['type' => 'index', 'columns' => ['eps_id'], 'length' => []],
            'fk_epsOperacao_operacao1_idx' => ['type' => 'index', 'columns' => ['operacao_id'], 'length' => []],
            'fk_epsOperacaoProduto_produto1_idx' => ['type' => 'index', 'columns' => ['produto_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_epsOperacaoProduto_produto1' => ['type' => 'foreign', 'columns' => ['produto_id'], 'references' => ['produto', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_epsOperacao_eps1' => ['type' => 'foreign', 'columns' => ['eps_id'], 'references' => ['eps', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_epsOperacao_operacao1' => ['type' => 'foreign', 'columns' => ['operacao_id'], 'references' => ['operacao', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'eps_id' => 1,
            'operacao_id' => 1,
            'produto_id' => 1,
            'ativo' => 1,
            'meta_incluido_usuario' => 1,
            'meta_incluido_data' => '2015-10-27 15:54:43',
            'meta_alterado_usuario' => 1,
            'meta_alterado_data' => '2015-10-27 15:54:43',
            'meta_excluido_usuario' => 1,
            'meta_excluido_data' => '2015-10-27 15:54:43'
        ],
    ];
}
