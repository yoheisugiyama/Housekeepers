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
            'order'=>array('sendee_id')
        );

       // ログインユーザーのスレッドを全て取得（並び順をsendee_id順にする）
        $my_threads=$this->MessageThread->find('all', $options);

        $my_threadids=array_column(array_column($my_threads, 'MessageThread'),'id');

        $my_sendees=array_column(array_column($my_threads, 'MessageThread'),'sendee_id');

        $options=array(
            'conditions'=>array(
                //最初のスレッドIDを取得
                'Message.thread_id'=>$my_threadids
            ),

            //アソシエーションを使うと、無駄なフィールドがたくさん出てくるので、必要なものだけに絞り込む
            'fields'=>array('title','message'),
            'recursive'=>1
        );


        //ログインユーザーのスレッドに関連する最初のメッセージを全て取得
        $my_messages=$this->Message->find('first',$options);

        //最初のメッセージをmy_messagesに格納、ビューに渡す
        $this->set('my_messages', $my_messages);

//        $my_messages=array_column($my_messages, 'Message');

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
