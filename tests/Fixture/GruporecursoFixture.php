<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GruporecursoFixture
 *
 */
class GruporecursoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'gruporecurso';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'recurso_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'grupo_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'meta_incluido_usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Codigo do usuario que inseriu a linha', 'precision' => null, 'autoIncrement' => null],
        'meta_incluido_data' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Data da inclusao da linha', 'precision' => null],
        'meta_alterado_usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Codigo do usuario que alterou a linha', 'precision' => null, 'autoIncrement' => null],
        'meta_alterado_data' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Data da alteracao da linha', 'precision' => null],
        'meta_excluido_usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Codigo do usuario que excluiu a linha', 'precision' => null, 'autoIncrement' => null],
        'meta_excluido_data' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Data da exclusao da linha', 'precision' => null],
        '_indexes' => [
            'fk_grupoRecurso_recurso1_idx' => ['type' => 'index', 'columns' => ['recurso_id'], 'length' => []],
            'fk_grupoRecurso_grupo1_idx' => ['type' => 'index', 'columns' => ['grupo_id'], 'length' => []],
        ],
        '_constraints' => [
            'fk_grupoRecurso_grupo1' => ['type' => 'foreign', 'columns' => ['grupo_id'], 'references' => ['grupo', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_grupoRecurso_recurso1' => ['type' => 'foreign', 'columns' => ['recurso_id'], 'references' => ['recurso', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'recurso_id' => 1,
            'grupo_id' => 1,
            'meta_incluido_usuario' => 1,
            'meta_incluido_data' => '2015-08-21 16:54:52',
            'meta_alterado_usuario' => 1,
            'meta_alterado_data' => '2015-08-21 16:54:52',
            'meta_excluido_usuario' => 1,
            'meta_excluido_data' => '2015-08-21 16:54:52'
        ],
    ];
}
