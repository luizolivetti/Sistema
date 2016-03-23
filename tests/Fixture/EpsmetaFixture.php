<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EpsmetaFixture
 *
 */
class EpsmetaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'epsmeta';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Chave de identificacao incremental', 'autoIncrement' => true, 'precision' => null],
        'epsOperacaoProduto_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'valor_meta' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'data_meta' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Data para meta estabelecida. A mesma EPS pode ter varias metas em um mesmo mes ou mesmo meta diaria diferente para dias de ações especificas.', 'precision' => null],
        'meta_incluido_usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Codigo do usuario que inseriu a linha', 'precision' => null, 'autoIncrement' => null],
        'meta_incluido_data' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Data da inclusao da linha', 'precision' => null],
        'meta_alterado_usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Codigo do usuario que alterou a linha', 'precision' => null, 'autoIncrement' => null],
        'meta_alterado_data' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Data da alteracao da linha', 'precision' => null],
        'meta_excluido_usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Codigo do usuario que excluiu a linha', 'precision' => null, 'autoIncrement' => null],
        'meta_excluido_data' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Data da exclusao da linha', 'precision' => null],
        '_indexes' => [
            'fk_epsMeta_epsOperacaoProduto1_idx' => ['type' => 'index', 'columns' => ['epsOperacaoProduto_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_epsMeta_epsOperacaoProduto1' => ['type' => 'foreign', 'columns' => ['epsOperacaoProduto_id'], 'references' => ['epsoperacaoproduto', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'epsOperacaoProduto_id' => 1,
            'valor_meta' => 1,
            'data_meta' => '2015-11-04',
            'meta_incluido_usuario' => 1,
            'meta_incluido_data' => '2015-11-04 18:28:50',
            'meta_alterado_usuario' => 1,
            'meta_alterado_data' => '2015-11-04 18:28:50',
            'meta_excluido_usuario' => 1,
            'meta_excluido_data' => '2015-11-04 18:28:50'
        ],
    ];
}
