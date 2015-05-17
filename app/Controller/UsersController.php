<?php
/**
 * Created by PhpStorm.
 * User: YoheiSugiyama
 * Date: 15/01/25
 * Time: 13:31
 */

class UsersController extends AppController
{

    //利用するモデルの定義
    public $uses = array('User');


    public function beforeFilter()
    {

    }


    public function login()
    {
        //Auth認証（ログイン）
        if ($this->request->isPost()) {
            if ($this->Auth->login()) {

                $this->Session->setFlash(__('ログイン成功!'));

            //GroupIDにてHouseownerかHousekeeperかを判定
                $user = $this->Auth->user();

                if($user['group_id']==1){
                    $this->Session->setFlash(__('あなたはハウスオーナーです'));
                    $this->redirect(array('controller'=>'Housekeepers','action'=>'index'));
                }elseif($user['group_id']==2){
                    $this->Session->setFlash(__('あなたはハウスキーパーです'));
                    //ページネーション画面へ遷移
                    $this->redirect(array('controller'=>'Houseowners','action'=>'index'));
                }


            } else {
                $this->Session->setFlash(__('ユーザー名とパスワードが正しくありません。もう一度試して下さい。'));
            }
        }
    }

    public function logout(){
        $this->Auth->logout();
        $this->redirect(array('controller'=>'Users','action'=>'login'));
    }

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
                $this->redirect(array('action'=>'login'));
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

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
        $groups = $this->User->Group->find('list');
        $this->set(compact('groups'));
    }



}