<?php
/**
 * Created by PhpStorm.
 * User: YoheiSugiyama
 * Date: 15/04/14
 * Time: 0:31
 */

App::uses('AppModel', 'Model');

class Houseowner extends AppModel
{


    public $belongsTo=array('Image');


    public $order = array('id DESC');

    //Search PluginのSearchableビヘイビアの設定
    public $actsAs = array('Search.Searchable');

    //Search Pluginの検索のタイプを$filterArgsプロパティにて設定
    public $filterArgs = array(
        // 例
        'station' => array('type' => 'like'),
        'experience'=>array('type'=>'value'),
        'sex'=>array('type'=>'value')

    );

    public $validate = array(
        'surname' =>array(
            'rule' =>'notEmpty',
            'required' =>true,
            'message' =>'苗字は必須です。'
        ),
        'firstname' =>array(
            'rule' =>'notEmpty',
            'required' =>true,
            'message' =>'名前は必須です。'
        ),


    );



}