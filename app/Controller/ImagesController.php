<?php

/**
 * @property Image $Image
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


            $this->Image->save($image);

            $path = IMAGES;

            $this->Session->setFlash('画像を登録しました');
            move_uploaded_file($image['tmp_name'], $path . DS . $image['name']);

            $this->redirect(array('controller'=>'Housekeepers', 'action' => 'index'));

        }
    }

}