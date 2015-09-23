<?php


/**
 * @property MessageThread $MessageThread
 */


class MessageThreadsController extends AppController
{

    public function beforeFilter(){
        if ($this->Auth->user()) {
            $this->layout = 'user';
        } else {
            $this->layout = 'default';
        }

    }

}