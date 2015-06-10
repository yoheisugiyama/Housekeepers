<?php

/**
 * @property Message $Message
 */

class MessagesController extends AppController
{

    public $uses=array('Message', 'MessageThread');

    public function index()
    {
        //sendee_idはhousekeeper_idまたはhouseowner_id
        $this->Session->write(array('sendee_id'=>$this->request->data['Message']['sendee_id']));

        $options =array(
            'conditions'=> array(
                'Housekeeper.id'=>$this->Session->read('sendee_id')
            ),
            'recursive'=>0,
            'order'=>'Housekeeper.id'
        );

        $housekeeper=$this->MessageThread->Housekeeper->find('first', $options);

        $this->set('housekeeper',$housekeeper);

    }


    public function send(){

        //新しいスレッドを作成
        $new_thread=array(
            'user_id' => $this->Auth->user('id'),
            'sendee_id' => $this->Session->read('sendee_id')
        );


        //データベースにスレッドがなければスレッドテーブルに保存、あれば何もしない。
        if($this->MessageThread->find('first',array('conditions'=>$new_thread))){

        }else{
            $this->MessageThread->save($new_thread);
        };

        //保存したばかりのスレッドデータをスレッドテーブルから取得
        $thread_data=$this->MessageThread->find('first',array('conditions'=>$new_thread));


        //メッセージテーブルに保存するデータの取得
        $new_message = array(
            //スレッドID
                'thread_id'=> $thread_data['MessageThread']['id'],
            //メッセージデータ（フォームからの入力）
                'title'=> $this->request->data['Message']['title'],
                'message' => $this->request->data['Message']['message']
            );


        //メッセージテーブルに新しいメッセージを保存
        $this->Message->save($new_message);
        $this->Session->setFlash('メッセージを送信しました');

        $this->Session->delete('sendee_id');

        $this->redirect(array('controller'=>'housekeepers','action'=>'index'));

    }

    public function my_message(){

        $options=array(
            'conditions'=>array(
                'user_id'=>  $this->Auth->user('id')
            ),
            'fields'=>array(
                'id','sendee_id'
            )
        );

       // ログインユーザーのスレッドを全て取得

        $my_threads=$this->MessageThread->find('all', $options);

        debug($my_threads);

        $my_threadids=array_column(array_column($my_threads, 'MessageThread'),'id');

        $my_sendees=array_column(array_column($my_threads, 'MessageThread'),'sendee_id');

        $options=array(
            'conditions'=>array(
                //最初のスレッドIDを取得
                'thread_id'=>$my_threadids
            )
        );

        $my_messages=$this->Message->find('all',$options);

        debug($my_messages);


        $my_messages=array_column($my_messages, 'Message');

        $this->set('my_messages', $my_messages);

        //sendee_idはhousekeeper_idまたはhouseowner_id


        $options=array(
            'conditions'=>array(
                'Housekeeper.id'=>$my_sendees
            ),
            'fields'=>array(
                'surname','firstname'
            )
        );

        $housekeeper=$this->MessageThread->Housekeeper->find('all', $options);

        $housekeeper=array_column($housekeeper, 'Housekeeper');

        $this->set('housekeeper',$housekeeper);

}




}
