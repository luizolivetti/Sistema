<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RecursoFixture
 *
 */
class RecursoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'recurso';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Chave de identificação sequencial', 'autoIncrement' => true, 'precision' => null],
        'recurso_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'tipoRecurso_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'titulo' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'comment' => 'Nome ou descrição do recurso', 'precision' => null, 'fixed' => null],
        'controller' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => 'Controller do sistema ', 'precision' => null, 'fixed' => null],
        'action' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => 'Action do sistema', 'precision' => null, 'fixed' => null],
        'params' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => 'Parametros para o Action do Sistema', 'precision' => null, 'fixed' => null],
        'ativo' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Disponibilidade do Recurso', 'precision' => null, 'autoIncrement' => null],
        'meta_incluido_usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Codigo do usuario que inseriu a linha', 'precision' => null, 'autoIncrement' => null],
        'meta_incluido_data' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Data da inclusao da linha', 'precision' => null],
        'meta_alterado_usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Codigo do usuario que alterou a linha', 'precision' => null, 'autoIncrement' => null],
        'meta_alterado_data' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Data da alteracao da linha', 'precision' => null],
        'meta_excluido_usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Codigo do usuario que excluiu a linha', 'precision' => null, 'autoIncrement' => null],
        'meta_excluido_data' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Data da exclusao da linha', 'precision' => null],
        '_indexes' => [
            'fk_recurso_tipoRecurso1_idx' => ['type' => 'index', 'columns' => ['tipoRecurso_id'], 'length' => []],
            'fk_recurso_recurso1_idx' => ['type' => 'index', 'columns' => ['recurso_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'id_UNIQUE' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'fk_recurso_recurso1' => ['type' => 'foreign', 'columns' => ['recurso_id'], 'references' => ['recurso', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_recurso_tipoRecurso1' => ['type' => 'foreign', 'columns' => ['tipoRecurso_id'], 'references' => ['tiporecurso', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'recurso_id' => 1,
            'tipoRecurso_id' => 1,
            'titulo' => 'Lorem ipsum dolor sit amet',
            'controller' => 'Lorem ipsum dolor sit amet',
            'action' => 'Lorem ipsum dolor sit amet',
            'params' => 'Lorem ipsum dolor sit amet',
            'ativo' => 1,
            'meta_incluido_usuario' => 1,
            'meta_incluido_data' => '2015-08-24 18:29:52',
            'meta_alterado_usuario' => 1,
            'meta_alterado_data' => '2015-08-24 18:29:52',
            'meta_excluido_usuario' => 1,
            'meta_excluido_data' => '2015-08-24 18:29:52'
        ],
    ];
}
