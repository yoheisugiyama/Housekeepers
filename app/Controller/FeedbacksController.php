<?php
/**
 * Created by PhpStorm.
 * User: YoheiSugiyama
 * Date: 15/09/26
 * Time: 15:26
 */

class FeedbacksController extends AppController{

    public $uses =array('Feedback');

    public function beforeFilter()
    {
        if ($this->Auth->user()) {
            $this->layout = 'user';
        } else {
            $this->layout = 'default';
        }
    }


    public function index(){

        $options = array(
            'conditions' =>array(
                'Feedback.housekeeper_id'=>1
            ),
            'order'=>'Feedback_housekeeper_id',
            'recursive'=>1
        );

        $feedbacks = $this->Feedback->find('all', $options);

        $this->set('feedbacks', $feedbacks);

        debug($feedbacks);

    }
}