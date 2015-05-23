<?php
/**
 * Created by PhpStorm.
 * User: YoheiSugiyama
 * Date: 15/05/23
 * Time: 11:43
 */

class MessagesController extends AppController
{

    public function index()
    {


        //sendee_idはhousekeeper_idまたはhouseowner_id
        $this->Session->write(array('sendee_id'=>$this->request->data['Message']['sendee_id']));



    }


    public function send(){



            $new_message = array(
                'user_id' => $this->Auth->user('id'),
                'sendee_id' => $this->Session->read('sendee_id'),
                'title'=> $this->request->data['Message']['title'],
                'message' => $this->request->data['Message']['message']
            );



            $this->Message->save($new_message);
            $this->Session->setFlash('メッセージを送信しました');

            $this->Session->delete('sendee_id');

            $this->redirect(array('controller'=>'housekeepers','action'=>'index'));


    }

    public function my_message(){


        debug($this->Message->findAllByUser_id(46));


}




}
