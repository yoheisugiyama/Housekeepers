<?php
/**
 * Created by PhpStorm.
 * User: YoheiSugiyama
 * Date: 15/05/23
 * Time: 11:44
 */


App::uses('AppModel', 'Model');

class Message extends AppModel
{

    public $belongsTo=array(
        'Housekeeper'=>array(
            'className'=>'Housekeeper',
            'foreignKey'=>'sendee_id',
            'fields'=>array('Housekeeper.id','Housekeeper.surname','Housekeeper.firstname')
        ),
        'Houseowner'=>array(
            'className'=>'Houseowner',
            'foreignKey'=>'sendee_id',
            'fields'=>array('Houseowner.id','Houseowner.surname','Houseowner.firstname')
        )
    );


}
