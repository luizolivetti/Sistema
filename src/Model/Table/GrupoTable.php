<?php
namespace App\Model\Table;

use App\Model\Entity\Grupo;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Grupo Model
 *
 * @property \Cake\ORM\Association\HasMany $Grupoeps
 * @property \Cake\ORM\Association\HasMany $Gruporecurso
 * @property \Cake\ORM\Association\HasMany $Grupousuario
 */
class GrupoTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('grupo');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->hasMany('Grupoeps', [
            'foreignKey' => 'grupo_id'
        ]);
        $this->hasMany('Gruporecurso', [
            'foreignKey' => 'grupo_id'
        ]);
        $this->hasMany('Grupousuario', [
            'foreignKey' => 'grupo_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->add('id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);
            
        $validator
            ->requirePresence('titulo', 'create')
            ->notEmpty('titulo');
            
        $validator
            ->add('ativo', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('ativo');
            
        $validator
            ->add('meta_incluido_usuario', 'valid', ['rule' => 'numeric'])
            ->requirePresence('meta_incluido_usuario', 'create')
            ->notEmpty('meta_incluido_usuario');
            
        $validator
            ->add('meta_incluido_data', 'valid', ['rule' => 'datetime'])
            ->requirePresence('meta_incluido_data', 'create')
            ->notEmpty('meta_incluido_data');
            
        $validator
            ->add('meta_alterado_usuario', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('meta_alterado_usuario');
            
        $validator
            ->add('meta_alterado_data', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('meta_alterado_data');
            
        $validator
            ->add('meta_excluido_usuario', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('meta_excluido_usuario');
            
        $validator
            ->add('meta_excluido_data', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('meta_excluido_data');

        return $validator;
    }
}
