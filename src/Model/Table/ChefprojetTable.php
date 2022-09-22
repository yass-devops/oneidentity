<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Chefprojet Model
 *
 * @method \App\Model\Entity\Chefprojet newEmptyEntity()
 * @method \App\Model\Entity\Chefprojet newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Chefprojet[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Chefprojet get($primaryKey, $options = [])
 * @method \App\Model\Entity\Chefprojet findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Chefprojet patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Chefprojet[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Chefprojet|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Chefprojet saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Chefprojet[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Chefprojet[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Chefprojet[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Chefprojet[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ChefprojetTable extends Table
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

        $this->setTable('chefprojet');
        $this->setDisplayField('idchef');
        $this->setPrimaryKey('idchef');
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
            ->scalar('nomchef')
            ->maxLength('nomchef', 100)
            ->requirePresence('nomchef', 'create')
            ->notEmptyString('nomchef');

        $validator
            ->scalar('prenomchef')
            ->maxLength('prenomchef', 100)
            ->requirePresence('prenomchef', 'create')
            ->notEmptyString('prenomchef');

        $validator
            ->scalar('emailchef')
            ->maxLength('emailchef', 100)
            ->requirePresence('emailchef', 'create')
            ->notEmptyString('emailchef');

        $validator
            ->scalar('clientsCP')
            ->maxLength('clientsCP', 100)
            ->allowEmptyString('clientsCP');

        return $validator;
    }
}
