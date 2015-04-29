<?php
/**
 * Created by PhpStorm.
 * User: YoheiSugiyama
 * Date: 15/04/12
 * Time: 17:07
 */


class HousekeepersController extends AppController
{

    //利用するモデルの定義
    public $uses = array('Housekeeper');

    public $helpers = array('Html', 'Form');

    public $paginate = array(
        'limit'=>10,
        'order'=>array(
            'Housekeeper.id'=>'ASC',
        ),
    );

    public function index(){
        //ハウスキーパー一覧をページネーションで表示
        $housekeepers=$this->paginate('Housekeeper',array('housekeeper_id not'=>null));


        $this->set('housekeepers', $housekeepers);
    }


    public function mypage()
    {
        $user = $this->Auth->user();
        $id = $user['id'];

        //最初にmypqgeにアクセスした場合
        if (!$this->request->is('post')) {

            $options = array(
                'conditions' => array(
                    'Housekeeper.housekeeper_id' => $id
                )
            );

            //ハウスキーパー情報をDBから取得
            $housekeeper = $this->Housekeeper->find('first', $options);

            $this->request->data = $housekeeper;

        }else{

            //mypageにアクセスしたあと、各項目をアップデートし、再登録する際の処理

            $new_housekeeper=array(
                'housekeeper_id'=>$id,
                'surname'=>$this->request->data['Housekeeper']['surname'],
                'firstname'=>$this->request->data['Housekeeper']['firstname'],
                'nickname'=>$this->request->data['Housekeeper']['nickname'],
                'sex'=>$this->request->data['Housekeeper']['sex'],
                'experience'=>$this->request->data['Housekeeper']['experience'],
                'prefecture'=>$this->request->data['Housekeeper']['prefecture'],
                'station'=>$this->request->data['Housekeeper']['station'],
                'salary'=>$this->request->data['Housekeeper']['salary'],
                'appeal'=>$this->request->data['Housekeeper']['appeal']
            );


            $this->Housekeeper->create();

            if($this->Housekeeper->save($new_housekeeper)){
                $this->Session->setFlash('マイーページ情報をアップデートしました');
                $this->redirect(array('action'=>'index'));
            }else{
                $this->Session->setFlash('入力に間違いがあります');
            }
        }
    }
}