<?php

/**
 * @property Message $Message
 */

class MessagesController extends AppController
{

    public $uses=array('Message', 'MessageThread','Housekeeper');

    public function beforeFilter(){
        if ($this->Auth->user()) {
            $this->layout = 'user';
        } else {
            $this->layout = 'default';
        }

    }

    public function index()
    {
        //sendee_idはhousekeeper_idまたはhouseowner_id

//        $this->Session->write(array('housekeeper_id'=>$this->request->data['Message']['housekeeper_id']));

        $options =array(
            'conditions'=> array(
                'Housekeeper.id'=>$this->request->data['Message']['housekeeper_id']
            ),
            'recursive'=>0,
            'order'=>'Housekeeper.id'
        );


        $housekeeper=$this->Housekeeper->find('first', $options);

        $this->set('housekeeper',$housekeeper);





    }


    public function send(){

        //スレッドを特定
        $new_thread=array(
            'user_id' => $this->Auth->user('id'),
            'housekeeper_id' => $this->request->data['Message']['housekeeper_id']
        );


        //データベースにスレッドがなければスレッドテーブルに保存して新しいスレッドを作成、あれば何もしない。
        if($this->MessageThread->find('first',array('conditions'=>$new_thread))){

        }else{
            $this->MessageThread->save($new_thread);
        };

       $message_thread =  $this->MessageThread->find('first',array('conditions'=>$new_thread));



        //メッセージテーブルに保存するデータの取得
        $new_message = array(
            //スレッドID
                'housekeeper_id'=> $message_thread['MessageThread']['housekeeper_id'],
            //メッセージデータ（フォームからの入力）
                'title'=> $this->request->data['Message']['title'],
                'message' => $this->request->data['Message']['message']
            );


        //メッセージテーブルに新しいメッセージを保存
        $this->Message->save($new_message);
        $this->Session->setFlash('メッセージを送信しました');


        $this->redirect(array('controller'=>'housekeepers','action'=>'index'));

    }

    /**
     *
     */
    public function my_message(){

        $options=array(
            'conditions'=>array(
                'user_id'=>  $this->Auth->user('id')
            ),
            'order'=>array('housekeeper_id')
        );

       // ログインユーザーのスレッドを全て取得
        $my_threads=$this->MessageThread->find('all', $options);

        debug(array_column(array_column($my_threads, 'MessageThread'), 'housekeeper_id'));



        $options=array(
            'conditions'=>array(
                //最初のスレッドIDを取得
//                'Message.thread_id'=>$my_threadids
                'user_id'=>$this->Auth->user('id')
            ),

            //アソシエーションを使うと、無駄なフィールドがたくさん出てくるので、必要なものだけに絞り込む
            'fields'=>array('title','message'),
            'recursive'=>1
        );


        //ログインユーザーと最初のSendeeとのメッセージを全て
        $my_messages=$this->MessageThread->Message->find('all',$options);



        //最初のメッセージをmy_messagesに格納、ビューに渡す
        $this->set('my_messages', $my_messages);

        $options=array(
            'conditions'=>array(
                ''=>  $this->Auth->user('id')
            ),
            'order'=>array('housekeeper_id')
        );


//        $my_messages=array_column($my_messages, 'Message');

        //sendee_idはhousekeeper_idまたはhouseowner_id

//
//        $options=array(
//
//            'conditions'=>array(
//                'Housekeeper.id'=>$my_sendees
//            ),
//
//            'fields'=>array(
//                'Housekeeper.surname','firstname'
//            ),
//
//            'order'=>array(
//                'MessageThread.sendee_id DESC'
//            )
//
//        );
//
//
//        $housekeeper=$this->MessageThread->find('all', $options);
//
//        $housekeeper=array_column($housekeeper,'Housekeeper');
//
//        $this->set('housekeeper',$housekeeper);

}




}
