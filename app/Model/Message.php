<?php

/**
 * @property MessageThread $MessageThread
 */

App::uses('AppModel', 'Model');

class Message extends AppModel
{

    public $belongsTo=array('MessageThread');

}
