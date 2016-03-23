<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Usuario Entity.
 */
class Usuario extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'nome' => true,
        'login' => true,
        'senha' => true,
        'ativo' => true,
        'meta_incluido_usuario' => true,
        'meta_incluido_data' => true,
        'meta_alterado_usuario' => true,
        'meta_alterado_data' => true,
        'meta_excluido_usuario' => true,
        'meta_excluido_data' => true,
        'grupousuario' => true,
    ];
}
