<?php
/**
 * Created by PhpStorm.
 * User: YoheiSugiyama
 * Date: 15/05/23
 * Time: 11:43
 */

class MessagesController extends AppController
{

    public function index(){



}


    public function send(){

        if($this->Message->save($this->request->data)){
            $this->Session->setFlash('メッセージを送信しました');
            $this->redirect(array('controller'=>'housekeepers','action'=>'ind_page'));
        }else{


        };

    }


}
