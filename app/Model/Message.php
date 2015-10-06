<?php

/**
 * @property MessageThread $MessageThread
 */

App::uses('AppModel', 'Model');

class Message extends AppModel
{

    public $belongsTo=array(
        'MessageThread'=>array(
            //アソシエーションで外部キーを設定
            'foreignKey'=>'housekeeper_id'
        ));


}
