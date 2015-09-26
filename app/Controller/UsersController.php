<?php

/**
 * @property User $User
 */


class UsersController extends AppController
{


    //利用するモデルの定義
    public $uses = array('User','Socialuser');


    public function beforeFilter()
    {
        $this->Auth->allow('index', 'opauth_complete');

        if ($this->Auth->user()) {
            $this->layout = 'user';
        } else {
            $this->layout = 'default';
        }

    }


    public function opauth_complete() {

        $social_user=array(
            'Socialuser'=>array(
                'uid'=> $this->data['auth']['uid'],
                'provider'=> $this->data['auth']['provider'],
            )
        );

        $user=array(
            'User'=> array(
                'name'=>$this->data['auth']['info']['name'],
                'email'=>'',
                'password'=>''
            )
        );

        $this->Socialuser->create();
        $this->Socialuser->save($social_user);

        //ユーザーテーブルにも保存
        $this->User->create();
        $this->User->save($user);

//        unset($userdata['User']['password']);

        //強制ログイン

        $this->Auth->login($user['User']);

        $this->Session->setFlash('ユーザー登録が完了しました。');

        $this->redirect(array('controller'=>'Housekeepers','action'=>'index'));
//        $this->redirect($this->Auth->redirect());


    }


    public function login()
    {
        //Auth認証（ログイン）
        if ($this->request->isPost()) {
            if ($this->Auth->login()) {
            //GroupIDにてHouseownerかHousekeeperかを判定
                $user = $this->Auth->user();

                if($user['group_id']==1){
//                    $this->Session->setFlash(__('あなたはハウスオーナーです'));
                    $this->redirect(array('controller'=>'Users','action'=>'loginindex'));
                }elseif($user['group_id']==2){
//                    $this->Session->setFlash(__('あなたはハウスキーパーです'));
                    //ページネーション画面へ遷移
                    $this->redirect(array('controller'=>'Users','action'=>'loginindex'));
                }
            }else{
                    $this->Session->setFlash(__('ユーザー名とパスワードが正しくありません。もう一度試して下さい。'));
                    $this->redirect(array('controller'=>'Housekeepers','action'=>'index'));
            }

        }
    }




    public function logout(){
        $this->Auth->logout();
        $this->redirect(array('controller'=>'Users','action'=>'index'));
    }

    /**
     * @param null $id
     * @throws Exception
     */
    public function register($id=null){

        // フォーム入力があった場合には保存処理。
        if($this->request->isPost()||$this->request->isPut()){
            //edit時にもパスワードが空白だったら対象外にする
            if($id!==null){
                if($this->request->data[$this->User->alias]['password']==''){
                    unset($this->request->data[$this->User->alias]['password']);
                }
            }
            if($this->User->save($this->request->data)){

                $this->Session->setFlash('ユーザー情報を保存しました');

                $this->redirect(array('controller'=>'Housekeepers', 'action'=>'loginindex'));
            }else{
                $this->Session->setFlash('入力に間違いがあります');
            }
            //フォーム入力がなく、初めて編集ページが表示された場合、初期値の準備
        }else{
            if($id!=null){
                $this->request->data=$this->User->findById($id);
                //パスワードまで編集画面で見せる必要がないので、unsetする。
                unset($this->request->data[$this->User->alias]['password']);

                if(empty($this->request->data)){
                    $this->Session->setFlash('ユーザが見つかりませんでした');

                }
            }
        }


    }


    public function index(){

    }

    public function loginindex(){

    }

     public function mypage(){

         if($this->Auth->user('group_id')==1){
             $this->redirect(array('controller'=>'houseowners', 'action'=>'mypage'));
         }elseif($this->Auth->user('group_id')==2){
             $this->redirect(array('controller'=>'housekeepers', 'action'=>'mypage'));

         }
        
    }





}