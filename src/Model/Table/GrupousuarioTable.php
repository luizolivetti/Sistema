<?php
namespace App\Model\Table;

use App\Model\Entity\Grupousuario;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Grupousuario Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Usuario
 * @property \Cake\ORM\Association\BelongsTo $Grupo
 */
class GrupousuarioTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('grupousuario');
        $this->belongsTo('Usuario', [
            'foreignKey' => 'usuario_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Grupo', [
            'foreignKey' => 'grupo_id',
            'joinType' => 'INNER'
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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['usuario_id'], 'Usuario'));
        $rules->add($rules->existsIn(['grupo_id'], 'Grupo'));
        return $rules;
    }
}
