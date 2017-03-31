<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employees Model
 *
 * @property \Cake\ORM\Association\HasMany $Employees
 *
 * @method \App\Model\Entity\Employees get($primaryKey, $options = [])
 * @method \App\Model\Entity\Employees newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Employees[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Employees|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employees patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Employees[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Employees findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmployeesTable extends Table
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

        $this->setTable('employees');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Departments', [
            'foreignKey'=>'department_id',
            'joinType'=>'INNER'
        ]);

        $this->belongsTo('Designations', [
            'foreignKey'=>'designation_id',
            'joinType'=>'INNER'
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
                ->integer('id')
                ->allowEmpty('id', 'create');

        $validator
                ->integer('department_id', 'create')
                ->notEmpty('department_id', 'Please Select Department');

        $validator
                ->integer('designation_id', 'create')
                ->notEmpty('designation_id', 'Please Select Designation');

        $validator
                ->requirePresence('name', 'create')
                ->notEmpty('name', 'Please Enter Your Name')
                ->add('name', [
                    'minLength'=>[
                        'rule'=>['minLength', 4],
                        'last'=>true,
                        'message'=>'Please Enter Name more 4 Character.'
                    ],
                    'maxLength'=>[
                        'rule'=>['maxLength', 20],
                        'message'=>'Please Enter Name Between 4 To 20 Character.'
                    ]
        ]);

        $validator
                ->requirePresence('email', 'create')
                ->notEmpty('email', 'Please Enter Email Address')
                ->add('email', [
                    'validFormat'=>[
                        'rule'=>'email',
                        'message'=>'Please Enter Valid Email Address. Ex:example123@gmai.com',
                    ]
        ]);


        $validator
                ->requirePresence('mobile', 'create')
                ->notEmpty('mobile', 'Please Enter Mobile Number')
                ->add('mobile', [
                    'minLength'=>[
                        'rule'=>['minLength', 10],
                        'last'=>true,
                        'message'=>'Please Enter Mobile Number Must be 10 Digit.'
                    ],
                    'maxLength'=>[
                        'rule'=>['maxLength', 10],
                        'message'=>'Please Enter Mobile Number Only 10 Digit.'
                    ],
                    'numeric'=>[
                        'rule'=>'numeric',
                        'message'=>'Invalid Mobile Number! Enter Only Digit. Mobile Number Format: eg 7600584687'
                    ]
        ]);


        $validator
                ->requirePresence('birtdate', 'create')
                ->notEmpty('birtdate');

        $validator
                ->requirePresence('gender', 'create')
                ->notEmpty('gender', 'Please Select Gender');

        $validator
                ->requirePresence('address', 'create')
                ->notEmpty('address', 'Please Enter Full Address')
                ->add('address', [
                    'minLength'=>[
                        'rule'=>['minLength', 10],
                        'last'=>true,
                        'message'=>'Please Enter Valid Address .'
                    ],
                    'maxLength'=>[
                        'rule'=>['maxLength', 250],
                        'message'=>'Address is  long.'
                    ]
        ]);

        $validator
                ->requirePresence('hobby', 'create')
                ->notEmpty('hobby', 'Please Checked At list One Hobby');

        $validator
                ->allowEmpty('image')
//                ->notEmpty('images', __('Please enter your cute picture'))
//                ->requirePresence('images', 'create')
                ->add('image', [
                    'validExtension'=>[
                        'rule'=>['extension', ['png', 'gif', 'jpeg', 'jpg']],
                        'message'=>__('These files extension are allowed: .png, .jpg, .jpeg, .gif')]]);


        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }

}
