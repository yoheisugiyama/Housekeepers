<?php
/**
 * Created by PhpStorm.
 * User: YoheiSugiyama
 * Date: 15/04/14
 * Time: 0:31
 */

App::uses('AppModel', 'Model');

class Housekeeper extends AppModel
{

    public $primaryKey = 'housekeeper_id';

    public $order = array('housekeeper_id DESC');

    //Search PluginのSearchableビヘイビアの設定
    public $actsAs = array('Search.Searchable');

    //Search Pluginの検索のタイプを$filterArgsプロパティにて設定
    public $filterArgs = array(
        // 例
        'station' => array('type' => 'like'),
        'sex'=>array('type'=>'value')

    );

}