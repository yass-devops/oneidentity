<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Rc Model
 *
 * @method \App\Model\Entity\Rc newEmptyEntity()
 * @method \App\Model\Entity\Rc newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Rc[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Rc get($primaryKey, $options = [])
 * @method \App\Model\Entity\Rc findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Rc patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Rc[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Rc|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Rc saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Rc[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Rc[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Rc[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Rc[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class RcTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('rc');
        $this->setDisplayField('idRC');
        $this->setPrimaryKey('idRC');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('nomRC')
            ->maxLength('nomRC', 100)
            ->requirePresence('nomRC', 'create')
            ->notEmptyString('nomRC');

        $validator
            ->scalar('prenomRC')
            ->maxLength('prenomRC', 100)
            ->requirePresence('prenomRC', 'create')
            ->notEmptyString('prenomRC');

        $validator
            ->scalar('emailRC')
            ->maxLength('emailRC', 100)
            ->requirePresence('emailRC', 'create')
            ->notEmptyString('emailRC');

        $validator
            ->scalar('clients')
            ->maxLength('clients', 100)
            ->requirePresence('clients', 'create')
            ->notEmptyString('clients');

        return $validator;
    }
}
