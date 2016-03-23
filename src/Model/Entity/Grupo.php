<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Grupo Entity.
 */
class Grupo extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'titulo' => true,
        'ativo' => true,
        'meta_incluido_usuario' => true,
        'meta_incluido_data' => true,
        'meta_alterado_usuario' => true,
        'meta_alterado_data' => true,
        'meta_excluido_usuario' => true,
        'meta_excluido_data' => true,
        'gruporecurso' => true,
        'grupousuario' => true,
    ];
}
