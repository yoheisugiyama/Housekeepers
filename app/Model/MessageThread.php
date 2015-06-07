<?php
/**
 * Created by PhpStorm.
 * User: YoheiSugiyama
 * Date: 15/06/06
 * Time: 15:21
 */


class MessageThread extends AppModel{

    public $name ='MessageThread';

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


    public $validate = array(



    );


}