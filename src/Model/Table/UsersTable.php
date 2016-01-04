<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('users');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id'
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
            ->allowEmpty('id', 'create');

        $validator
            ->add('email', 'valid', ['rule' => 'email'])
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->requirePresence('givenname', 'create')
            ->notEmpty('givenname');

        $validator
            ->requirePresence('familyname', 'create')
            ->notEmpty('familyname');

        $validator
            ->add('birthday', 'valid', ['rule' => 'date'])
            ->requirePresence('birthday', 'create')
            ->notEmpty('birthday');

        $validator
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->requirePresence('suburb', 'create')
            ->notEmpty('suburb');

        $validator
            ->requirePresence('state', 'create')
            ->notEmpty('state');

        $validator
            ->add('postcode', 'valid', ['rule' => 'numeric'])
            ->requirePresence('postcode', 'create')
            ->notEmpty('postcode');

        $validator
            ->add('country', 'valid', ['rule' => 'numeric'])
            ->requirePresence('country', 'create')
            ->notEmpty('country');

        $validator
            ->add('phone', 'valid', ['rule' => 'numeric'])
            ->requirePresence('phone', 'create')
            ->notEmpty('phone');

        $validator
            ->add('mobile', 'valid', ['rule' => 'numeric'])
            ->requirePresence('mobile', 'create')
            ->notEmpty('mobile');

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
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
}
