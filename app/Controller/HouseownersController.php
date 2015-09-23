<?php

/**
 * @property Houseowner $Houseowner
 */

class HouseownersController extends AppController
{
    //利用するモデルの定義
    public $uses = array('Houseowner', 'Sex','Housekeeper');

    public $helpers = array('Html', 'Form');

    //Search Pluginの Prgコンポーネントを設定
    public $components = array('Search.Prg');

    public $presetVars = true;


    public function beforeFilter(){
        if ($this->Auth->user()) {
            $this->layout = 'user';
        } else {
            $this->layout = 'default';
        }

    }

    public function index(){
        //ハウスオーナー一覧をページネーションで表示
        // Search PluginのPOSTデータのバリデーションを実施

        $this->Prg->commonProcess();

        $this->paginate = array(
            //Search Pluginにて検索条件によって絞り込まれたデータを抽出
            'conditions' => $this->Houseowner->parseCriteria($this->passedArgs),
            'id not'=>null,
            'recursive'=>1
        );

        $this->set('Houseowners', $this->paginate());

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
                    'Houseowner.user_id' => $id
                ),
                'order'=>'Houseowner.id',
                'recursive'=>1
            );

            //ハウスキーパー情報をDBから取得
            $houseowner = $this->Houseowner->find('first', $options);



            if(!$houseowner){
                //ハウスオーナープロフィール登録がまだの場合

            }else{
                //ハウスオーナープロフィール登録がある程度終了している場合
                $this->set('houseowner',$houseowner);

                $this->Session->write(array('id'=>$houseowner['Houseowner']['id']));

                $this->request->data = $houseowner;
            }

        }else{
            //mypageにアクセスしたあと、各項目をアップデートし、再登録する際の処理

            $new_Houseowner=array(
                'Houseowner_id'=>$id,
                'surname'=>$this->request->data['Houseowner']['surname'],
                'firstname'=>$this->request->data['Houseowner']['firstname'],
                'sex'=>$this->request->data['Houseowner']['sex'],
                'age'=>$this->request->data['Houseowner']['age'],
                'prefecture'=>$this->request->data['Houseowner']['prefecture'],
                'marital_status'=>$this->request->data['Houseowner']['marital_status'],
                'comment'=>$this->request->data['Houseowner']['comment']
            );

            $this->Houseowner->create();

            if($this->Houseowner->save($new_Houseowner)){
                $this->Session->setFlash('マイーページ情報をアップデートしました');
                $this->redirect(array('controller'=>'housekeepers','action'=>'index'));
            }else{
                $this->Session->setFlash('入力に間違いがあります');

            }
        }
    }

    public function ind_page(){

        $id=$this->request->pass[0];

        $options = array(
            'conditions' => array(
                'Houseowner.id' => $id
            ),
            'order'=>'Houseowner.id',
            'recursive'=>1

        );

        //ハウスキーパー情報をDBから取得
        $houseowner = $this->Houseowner->find('first', $options);

        $this->set('houseowner',$houseowner);


    }


    public function housekeeper_request(){

        // リクエストを送るハウスキーパーの情報

        $housekeeper_id=$this->request->data['Houseowner']['housekeeper_request'];

        $options = array(
            'conditions' => array(
                'Housekeeper.id' => $housekeeper_id
            ),
        );

        $housekeeper= $this->Housekeeper->find('first', $options);

        $this->set('housekeeper', $housekeeper);

        //　当該ユーザー（ハウスオーナー）の情報
        $user = $this->Auth->user();
        $user_id = $user['id'];
        $this->set('user_id',$user_id);

        $options = array(
            'conditions' => array(
                'Houseowner.user_id' => $user_id
            ),
            'order'=>'Houseowner.id',
            'recursive'=>1
        );

        //ハウスキーパー情報をDBから取得
        $houseowner = $this->Houseowner->find('first', $options);
        $this->set('houseowner',$houseowner);
        $this->request->data = $houseowner;


    }

}