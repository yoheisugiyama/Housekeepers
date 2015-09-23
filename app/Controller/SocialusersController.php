<?php
/**
 * @property Socialusers $Socialusers
 */


class SocialusersController extends AppController{

    public $uses = array('User','Socialuser');

    public function beforeFilter(){
        if ($this->Auth->user()) {
            $this->layout = 'user';
        } else {
            $this->layout = 'default';
        }

    }

//    public $components = array(
//
//        //Auth コンポーネントの使用
//        'Auth'=>array(
//            'authenticate'=>array(
//                'Form'=>array(
//                    'userModel'=>'Socialuser',
//                    'fields' => array('username' => 'uid','password'=>'provider')
//                )
//            ),
//
//            'loginRedirect'=>array('controller'=>'Housekeepers', 'action'=>'index'),
//            'logoutRedirect'=>array('controller'=>'Users', 'action'=>'login')
//
//        ),
//
//
//    );




}