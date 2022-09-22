<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Responsableserviceprodops Model
 *
 * @method \App\Model\Entity\Responsableserviceprodop newEmptyEntity()
 * @method \App\Model\Entity\Responsableserviceprodop newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Responsableserviceprodop[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Responsableserviceprodop get($primaryKey, $options = [])
 * @method \App\Model\Entity\Responsableserviceprodop findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Responsableserviceprodop patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Responsableserviceprodop[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Responsableserviceprodop|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Responsableserviceprodop saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Responsableserviceprodop[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Responsableserviceprodop[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Responsableserviceprodop[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Responsableserviceprodop[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ResponsableserviceprodopsTable extends Table
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

        $this->setTable('responsableserviceprodops');
        $this->setDisplayField('idRespProdops');
        $this->setPrimaryKey('idRespProdops');
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
            ->scalar('nomRespProdops')
            ->maxLength('nomRespProdops', 222)
            ->requirePresence('nomRespProdops', 'create')
            ->notEmptyString('nomRespProdops');

        $validator
            ->scalar('prenomRespProdops')
            ->maxLength('prenomRespProdops', 222)
            ->requirePresence('prenomRespProdops', 'create')
            ->notEmptyString('prenomRespProdops');

        $validator
            ->scalar('emailRespProdops')
            ->maxLength('emailRespProdops', 222)
            ->requirePresence('emailRespProdops', 'create')
            ->notEmptyString('emailRespProdops');

        return $validator;
    }
}
