<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OperacaoFixture
 *
 */
class OperacaoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'operacao';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Chave de idenficação incremental', 'autoIncrement' => true, 'precision' => null],
        'canal_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Chave estrangeira de canal para relacionamento', 'precision' => null, 'autoIncrement' => null],
        'titulo' => ['type' => 'string', 'length' => 150, 'null' => false, 'default' => null, 'comment' => 'Descricao ou nome da operacao', 'precision' => null, 'fixed' => null],
        'ativo' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => '0', 'comment' => 'Disponibildiade da operacao', 'precision' => null, 'fixed' => null],
        'meta_incluido_usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Codigo do usuario que inseriu a linha', 'precision' => null, 'autoIncrement' => null],
        'meta_incluido_data' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Data da inclusao da linha', 'precision' => null],
        'meta_alterado_usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Codigo do usuario que alterou a linha', 'precision' => null, 'autoIncrement' => null],
        'meta_alterado_data' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Data da alteracao da linha', 'precision' => null],
        'meta_excluido_usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Codigo do usuario que excluiu a linha', 'precision' => null, 'autoIncrement' => null],
        'meta_excluido_data' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Data da exclusao da linha', 'precision' => null],
        '_indexes' => [
            'fk_operacao_canal1_idx' => ['type' => 'index', 'columns' => ['canal_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_operacao_canal1' => ['type' => 'foreign', 'columns' => ['canal_id'], 'references' => ['canal', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'canal_id' => 1,
            'titulo' => 'Lorem ipsum dolor sit amet',
            'ativo' => 'Lorem ipsum dolor sit amet',
            'meta_incluido_usuario' => 1,
            'meta_incluido_data' => '2015-08-28 20:31:55',
            'meta_alterado_usuario' => 1,
            'meta_alterado_data' => '2015-08-28 20:31:55',
            'meta_excluido_usuario' => 1,
            'meta_excluido_data' => '2015-08-28 20:31:55'
        ],
    ];
}
