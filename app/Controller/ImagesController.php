<?php
/**
 * Created by PhpStorm.
 * User: YoheiSugiyama
 * Date: 15/05/03
 * Time: 15:35
 */

class ImagesController extends AppController
{

    public function file_upload($id = null)
    {

        //もしデータが送信されたら
        if (!$this->request->data) {


        } else {

            //ファイル情報の取得
            $image = $this->request->data['Image']['Image'];

            $housekeeper_id=$this->Session->read('id');

            $this->Session->delete('id');

            $image['housekeeper_id']=$housekeeper_id;


            $this->Image->save($image);

            $path = IMAGES;

            $this->Session->setFlash('画像を登録しました');
            move_uploaded_file($image['tmp_name'], $path . DS . $image['name']);

            $this->redirect(array('controller'=>'Housekeepers', 'action' => 'index'));

        }
    }

}