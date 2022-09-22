<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clients Model
 *
 * @method \App\Model\Entity\Client newEmptyEntity()
 * @method \App\Model\Entity\Client newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Client[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Client get($primaryKey, $options = [])
 * @method \App\Model\Entity\Client findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Client patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Client[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Client|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Client saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Client[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ClientsTable extends Table
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

        $this->setTable('clients');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('nomclt')
            ->maxLength('nomclt', 100)
            ->requirePresence('nomclt', 'create')
            ->notEmptyString('nomclt');

        $validator
            ->scalar('nomcontratclt')
            ->maxLength('nomcontratclt', 100)
            ->requirePresence('nomcontratclt', 'create')
            ->notEmptyString('nomcontratclt');

        $validator
            ->scalar('emailcontratclt')
            ->maxLength('emailcontratclt', 100)
            ->requirePresence('emailcontratclt', 'create')
            ->notEmptyString('emailcontratclt');

        $validator
            ->scalar('nomrespclt')
            ->maxLength('nomrespclt', 100)
            ->requirePresence('nomrespclt', 'create')
            ->notEmptyString('nomrespclt');

        $validator
            ->scalar('actif')
            ->requirePresence('actif', 'create')
            ->notEmptyString('actif');

        $validator
            ->scalar('contratclt')
            ->requirePresence('contratclt', 'create')
            ->notEmptyString('contratclt');

        $validator
            ->scalar('type')
            ->requirePresence('type', 'create')
            ->notEmptyString('type');

        $validator
            ->scalar('solution')
            ->requirePresence('solution', 'create')
            ->notEmptyString('solution');

        $validator
            ->scalar('VersionIAM')
            ->requirePresence('VersionIAM', 'create')
            ->notEmptyString('VersionIAM');

        $validator
            ->integer('idResp')
            ->requirePresence('idResp', 'create')
            ->notEmptyString('idResp');

        $validator
            ->integer('idChefP')
            ->requirePresence('idChefP', 'create')
            ->notEmptyString('idChefP');

        return $validator;
    }
}
