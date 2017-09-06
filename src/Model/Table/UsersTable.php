<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function initialize(array $config) {
        parent::initialize($config);
        $this->table('users');
        $this->displayField('id');
        $this->primaryKey('id');
    }
    public function validationDefault(Validator $validator)
    {
//        return $validator
//            ->notEmpty('username', 'A username is required')
//            ->notEmpty('password', 'A password is required')
//            ->notEmpty('role', 'A role is required')
//            ->add('role', 'inList', [
//                'rule' => ['inList', ['admin', 'author']],
//                'message' => 'Please enter a valid role'
//            ]);
        
        $validator
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        return $validator;
    }
    public function buildRules(RulesChecker $rules) {
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
}

