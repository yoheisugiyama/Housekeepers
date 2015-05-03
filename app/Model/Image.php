<?php
/**
 * Created by PhpStorm.
 * User: YoheiSugiyama
 * Date: 15/05/03
 * Time: 16:40
 */

App::uses('AppModel', 'Model');

class Image extends AppModel
{

    public $belongsTo='Housekeeper';

}
