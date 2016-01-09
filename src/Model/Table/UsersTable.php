<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Auth\DefaultPasswordHasher;

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

        $this->belongsTo('UserTypes', [
            'foreignKey' => 'user_type_id'
        ]);

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
            ->add('email', 'valid', ['rule' => 'email','message' => 'Please enter a valid e-mail address'])
            ->requirePresence('email', 'create')
            ->notEmpty('email','Please enter an email address')
            ->add('confirm_email', 'no-misspelling', [
                'rule' => ['compareWith', 'email'],
                'message' => 'Email does not match',]);

        $validator
            ->requirePresence('password', 'create')
            ->add('password', [
                'length' => [
                    'rule' => ['minLength', 4],
                    'message' => 'Password needs to be at least 4 characters long',]])
            ->notEmpty('password','Please enter a password')
            ->notEmpty('confirm_password','Please confirm password')
            ->add('confirm_password', 'no-misspelling', [
                'rule' => ['compareWith', 'password'],
                'message' => 'Passwords do not match',]);

        $validator
            ->requirePresence('givenname', 'create')
            ->notEmpty('givenname','Please enter your given name');

        $validator
            ->requirePresence('familyname', 'create')
            ->notEmpty('familyname','Please enter your family name');

        $validator
            ->add('birthday', 'valid', ['rule' => 'date'])
            ->requirePresence('birthday', 'create')
            ->notEmpty('birthday','Please enter your date of birth');

        $validator
            ->requirePresence('gender', 'create')
            ->notEmpty('gender','Please enter your gender');

        $validator
            ->requirePresence('address', 'create')
            ->notEmpty('address','Please enter your address');

        $validator
            ->requirePresence('suburb', 'create')
            ->notEmpty('suburb','Please enter your suburb');

        $validator
            ->requirePresence('state', 'create')
            ->notEmpty('state','Please enter your state');

        $validator
            ->add('postcode', 'valid', ['rule' => 'numeric'])
            ->requirePresence('postcode', 'create')
            ->notEmpty('postcode','Please enter your postcode');

        $validator
            ->add('country_id', 'valid', ['rule' => 'numeric'])
            ->requirePresence('country_id', 'create')
            ->notEmpty('country_id','Please your a country');

        $validator
            ->add('phone', 'valid', ['rule' => 'numeric'])
            ->requirePresence('phone', 'create')
            ->notEmpty('phone','Please enter your phone number');

        $validator
            ->add('mobile', 'valid', ['rule' => 'numeric'])
            ->requirePresence('mobile', 'create')
            ->allowEmpty('mobile');

        $validator
            ->add('terms', 'boolean', [
                'rule' => ['comparison', '!=', 0],
                'message' => 'Please accept the terms and conditions'
            ]);

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
