<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuarioFixture
 *
 */
class UsuarioFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'usuario';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Chave de identificação sequencial', 'autoIncrement' => true, 'precision' => null],
        'nome' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'comment' => 'Nome do usuário', 'precision' => null, 'fixed' => null],
        'login' => ['type' => 'string', 'length' => 45, 'null' => false, 'default' => null, 'comment' => 'Login de Acesso', 'precision' => null, 'fixed' => null],
        'senha' => ['type' => 'string', 'length' => 32, 'null' => false, 'default' => null, 'comment' => 'Senha de Acesso', 'precision' => null, 'fixed' => null],
        'ativo' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => 'Disponibilidade do usuário', 'precision' => null, 'autoIncrement' => null],
        'meta_incluido_usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'Codigo do usuario que inseriu a linha', 'precision' => null, 'autoIncrement' => null],
        'meta_incluido_data' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'Data da inclusao da linha', 'precision' => null],
        'meta_alterado_usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Codigo do usuario que alterou a linha', 'precision' => null, 'autoIncrement' => null],
        'meta_alterado_data' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Data da alteracao da linha', 'precision' => null],
        'meta_excluido_usuario' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Codigo do usuario que excluiu a linha', 'precision' => null, 'autoIncrement' => null],
        'meta_excluido_data' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'Data da exclusao da linha', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
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
            'nome' => 'Lorem ipsum dolor sit amet',
            'login' => 'Lorem ipsum dolor sit amet',
            'senha' => 'Lorem ipsum dolor sit amet',
            'ativo' => 1,
            'meta_incluido_usuario' => 1,
            'meta_incluido_data' => '2015-08-24 18:29:44',
            'meta_alterado_usuario' => 1,
            'meta_alterado_data' => '2015-08-24 18:29:44',
            'meta_excluido_usuario' => 1,
            'meta_excluido_data' => '2015-08-24 18:29:44'
        ],
    ];
}
