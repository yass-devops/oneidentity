<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Profil Model
 *
 * @method \App\Model\Entity\Profil newEmptyEntity()
 * @method \App\Model\Entity\Profil newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Profil[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Profil get($primaryKey, $options = [])
 * @method \App\Model\Entity\Profil findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Profil patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Profil[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Profil|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profil saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profil[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profil[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profil[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profil[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProfilTable extends Table
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

        $this->setTable('profil');
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
            ->scalar('Oneidentity')
            ->maxLength('Oneidentity', 50)
            ->requirePresence('Oneidentity', 'create')
            ->notEmptyString('Oneidentity');

        $validator
            ->scalar('IAM')
            ->maxLength('IAM', 50)
            ->requirePresence('IAM', 'create')
            ->notEmptyString('IAM');

        return $validator;
    }
}
