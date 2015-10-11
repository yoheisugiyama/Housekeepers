<?php

/**
 * @property Housekeeper $Housekeeper
 */

class HousekeepersController extends AppController
{
    //利用するモデルの定義
    public $uses = array('Housekeeper','Feedback');


    public $helpers = array('Html', 'Form');

    //Search Pluginの Prgコンポーネントを設定
    public $components = array('Search.Prg');

    public $presetVars = true;


    public function beforeFilter()
    {
        $this->set('user',$this->Auth->user());

        if ($this->Auth->user()) {
            $this->layout = 'user';
        } else {
            $this->layout = 'default';
        }

    }

    public function index(){
        //ハウスキーパー一覧をページネーションで表示
        // recursiveでアソシエーションをどの深さまで掘り下げるかを設定
        // $this->Housekeeper->recursive = 0;
        // Search PluginのPOSTデータのバリデーションを実施

        $this->Prg->commonProcess();
        $this->paginate = array(
            //Search Pluginにて検索条件によって絞り込まれたデータを抽出
            'conditions' => $this->Housekeeper->parseCriteria($this->passedArgs),
            'id not'=>null,
            'recursive'=>1
        );

        $this->set('housekeepers', $this->paginate());


    }

    public function mypage()
    {
        $user = $this->Auth->user();
        $id = $user['id'];


        $this->set('user_id',$id);

        //最初にmypqgeにアクセスした場合
        if (!$this->request->is('post')) {

            $options = array(
                'conditions' => array(
                    'Housekeeper.user_id' => $id
                ),
                'order'=>'Housekeeper.id',
                'recursive'=>1
            );

            //ハウスキーパー情報をDBから取得
            $housekeeper = $this->Housekeeper->find('first', $options);

            if(!$housekeeper){

            }else{
                $this->set('housekeeper',$housekeeper);
                $this->Session->write(array('id'=>$housekeeper['Housekeeper']['id']));
                $this->request->data = $housekeeper;
            }

        }else{

           //mypageにアクセスしたあと、各項目をアップデートし、再登録する際の処理

            $new_housekeeper=array(
                'user_id'=>$this->request->data['Housekeeper']['user_id'],
                'surname'=>$this->request->data['Housekeeper']['surname'],
                'firstname'=>$this->request->data['Housekeeper']['firstname'],
                'nickname'=>$this->request->data['Housekeeper']['nickname'],
                'experience'=>$this->request->data['Housekeeper']['experience'],
                'prefecture'=>$this->request->data['Housekeeper']['prefecture'],
                'station'=>$this->request->data['Housekeeper']['station'],
                'salary'=>$this->request->data['Housekeeper']['salary'],
                'appeal'=>$this->request->data['Housekeeper']['appeal']
            );

            $this->Housekeeper->create();

            if($this->Housekeeper->save($new_housekeeper)){
                $this->Session->setFlash('マイーページ情報をアップデートしました');
                $this->redirect(array('controller'=>'houseowners','action'=>'index'));
            }else{
                $this->Session->setFlash('入力に間違いがあります');
            }
        }
    }

    public function ind_page(){

        $id=$this->request->pass[0];

           $options = array(
                'conditions' => array(
                    'Housekeeper.id' => $id
                ),
                'order'=>'Housekeeper.id',
                'recursive'=>1
            );

            //ハウスキーパー情報をDBから取得
            $housekeeper = $this->Housekeeper->find('first', $options);

            $this->set('housekeeper',$housekeeper);


        $options = array(
            'conditions' =>array(
                'Feedback.housekeeper_id'=>$id
            ),
            'order'=>'Feedback.housekeeper_id',
            'recursive'=>-1
        );

        $feedbacks = $this->Feedback->find('all', $options);
        $this->set('feedbacks', $feedbacks);


        $user = $this->Auth->user();
        $id = $user['id'];
        $this->set('user_id',$id);





    }

}