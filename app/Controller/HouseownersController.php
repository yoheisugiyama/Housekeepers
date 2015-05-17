<?php
/**
 * Created by PhpStorm.
 * User: YoheiSugiyama
 * Date: 15/04/12
 * Time: 17:07
 */


class HouseownersController extends AppController
{
    //利用するモデルの定義
    public $uses = array('Houseowner','User','Image');

    public $helpers = array('Html', 'Form');

    //Search Pluginの Prgコンポーネントを設定
    public $components = array('Search.Prg');

    public $presetVars = true;

    public function index(){
        //ハウスオーナー一覧をページネーションで表示
        // Search PluginのPOSTデータのバリデーションを実施

        $this->Prg->commonProcess();
        $this->paginate = array(
            //Search Pluginにて検索条件によって絞り込まれたデータを抽出
            'conditions' => $this->Houseowner->parseCriteria($this->passedArgs),
            'id not'=>null
        );

        $this->set('Houseowners', $this->paginate());

    }

    public function mypage()
    {
        $user = $this->Auth->user();
        $id = $user['id'];

        //最初にmypqgeにアクセスした場合
        if (!$this->request->is('post')) {

            $options = array(
                'conditions' => array(
                    'Houseowner.id' => $id
                )
            );

            //ハウスキーパー情報をDBから取得
            $Houseowner = $this->Houseowner->find('first', $options);

            $this->Session->write(array('id'=>$Houseowner['Houseowner']['id']));

            $this->request->data = $Houseowner;

        }else{

            //mypageにアクセスしたあと、各項目をアップデートし、再登録する際の処理

            $new_Houseowner=array(
                'Houseowner_id'=>$id,
                'surname'=>$this->request->data['Houseowner']['surname'],
                'firstname'=>$this->request->data['Houseowner']['firstname'],
                'nickname'=>$this->request->data['Houseowner']['nickname'],
                'sex'=>$this->request->data['Houseowner']['sex'],
                'experience'=>$this->request->data['Houseowner']['experience'],
                'prefecture'=>$this->request->data['Houseowner']['prefecture'],
                'station'=>$this->request->data['Houseowner']['station'],
                'salary'=>$this->request->data['Houseowner']['salary'],
                'appeal'=>$this->request->data['Houseowner']['appeal']
            );

            $this->Houseowner->create();

            if($this->Houseowner->save($new_Houseowner)){
                $this->Session->setFlash('マイーページ情報をアップデートしました');
                $this->redirect(array('action'=>'index'));
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
            'order'=>'Houseowner.id'
        );

        //ハウスキーパー情報をDBから取得
        $houseowner = $this->Houseowner->find('first', $options);


        $this->set('houseowner',$houseowner);

    }

}