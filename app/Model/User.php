<?php
/**
 * Created by PhpStorm.
 * User: YoheiSugiyama
 * Date: 15/02/28
 * Time: 4:51
 */

App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');


class User extends AppModel{

    public $name='User';

    public $hasMany=array('Housekeeper','Houseowner');

    public $validate =array(
        'name'=>array(
            'rule'=>'notEmpty',
            'message'=>'何か書こうよ'
        ),

        'email'=>array(
            array('rule'=>'email',
            'required'=>true,
            'allowEmpty'=>false,
            'message'=>'emailアドレスの形式で入力してください'
            ),
            array(
                'rule'=>'notEmpty',
            'message'=>'何か書こうよ'
            )
            ),
        'password'=>array(
            array(
                'rule'=>'alphaNumeric',
                'message'=>'英数字で入力してください'
            ),
            array(
                'rule'=>'notEmpty',
                'message'=>'何か書こうよ'
            ),
            array(
                'rule'=>array('minLength', 4),
                'message'=>'短すぎます',
            ),
            array(
                'rule'=>array('maxLength', 16),
                'message'=>'長すぎます',
            ),
        ),
    );

    function beforeSave($options=array()){
        //パスワードが入力されている場合は暗号化する

        if(!empty($this->data[$this->alias]['password'])){
            $passwordHasher = new SimplePasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
        }

        return true;
    }

}