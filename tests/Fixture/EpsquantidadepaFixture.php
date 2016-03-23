<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EpsquantidadepaFixture
 *
 */
class EpsquantidadepaFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'epsquantidadepa';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Chave de identificacao incremental', 'autoIncrement' => true, 'precision' => null],
        'epsOperacaoProduto_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'quantidade_pa' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Quantidade de Pontos de Atendimento de uma EPS por operação e produto', 'precision' => null, 'autoIncrement' => null],
        'data_pa' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Data para disponibilidade de PA. Uma mesma EPS pode ter 3 valores de quantidades de PA diferentes em datas diferentes e os calculos devem levar isso em consideração.', 'precision' => null],
        'meta_incluido_usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Codigo do usuario que inseriu a linha', 'precision' => null, 'autoIncrement' => null],
        'meta_incluido_data' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Data da inclusao da linha', 'precision' => null],
        'meta_alterado_usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Codigo do usuario que alterou a linha', 'precision' => null, 'autoIncrement' => null],
        'meta_alterado_data' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Data da alteracao da linha', 'precision' => null],
        'meta_excluido_usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Codigo do usuario que excluiu a linha', 'precision' => null, 'autoIncrement' => null],
        'meta_excluido_data' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Data da exclusao da linha', 'precision' => null],
        '_indexes' => [
            'fk_epsQuantidadePa_epsOperacaoProduto1_idx' => ['type' => 'index', 'columns' => ['epsOperacaoProduto_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_epsQuantidadePa_epsOperacaoProduto1' => ['type' => 'foreign', 'columns' => ['epsOperacaoProduto_id'], 'references' => ['epsoperacaoproduto', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'quantidade_pa' => 1,
            'data_pa' => '2015-11-03',
            'meta_incluido_usuario' => 1,
            'meta_incluido_data' => '2015-11-03 19:22:18',
            'meta_alterado_usuario' => 1,
            'meta_alterado_data' => '2015-11-03 19:22:18',
            'meta_excluido_usuario' => 1,
            'meta_excluido_data' => '2015-11-03 19:22:18'
        ],
    ];
}
