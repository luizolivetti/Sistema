<?php
namespace App\Model\Table;

use App\Model\Entity\Recurso;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Recurso Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Recurso
 * @property \Cake\ORM\Association\BelongsTo $Tiporecurso
 * @property \Cake\ORM\Association\HasMany $Gruporecurso
 * @property \Cake\ORM\Association\HasMany $Recurso
 */
class RecursoTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('recurso');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Recurso', [
            'foreignKey' => 'recurso_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Tiporecurso', [
            'foreignKey' => 'tipoRecurso_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Gruporecurso', [
            'foreignKey' => 'recurso_id'
        ]);
        $this->hasMany('Recurso', [
            'foreignKey' => 'recurso_id'
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
            ->allowEmpty('controller');
            
        $validator
            ->allowEmpty('action');
            
        $validator
            ->allowEmpty('params');
            
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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['recurso_id'], 'Recurso'));
        $rules->add($rules->existsIn(['tipoRecurso_id'], 'Tiporecurso'));
        return $rules;
    }
}
