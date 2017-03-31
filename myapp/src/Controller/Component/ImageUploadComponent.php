<?php

namespace App\Controller\Component;

use Cake\Controller\Component;

class ImageUploadComponent extends Component
{

    /*
     * Upload A image File...
     * */

    public function UploadImage($getImageName, $file, $path)
    {
        //Check if image has been uploaded
        if(!empty($getImageName)){
            //put the data into a var for easy use
            $ext=substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
            $date_time=date("Y_m_d_h_i_s");
            $tmp=explode('.', $file['name']);
            $file['name']=$tmp[0]."_$date_time".".$ext";
            $arr_ext=array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions

            if(in_array($ext, $arr_ext)){
                $upload=move_uploaded_file($file['tmp_name'], WWW_ROOT.$path.$file['name']);
                if($upload){
                    return $file['name'];
                }else{
                    $this->Flash->error(__('Error In Image Upload'));
                }
            }else{
                return $file['name']='nopic.jpg';
            }
        }else{
            return $file['name']='nopic.jpg';
        }
    }

    /*
     * Update A image File...
     * */

    public function UpdateImage($getImageName, $file, $path, $oldImage)
    {
        //Check if image has been uploaded
        if(!empty($getImageName)){
            //put the data into a var for easy use
            $ext=substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
            $date_time=date("Y_m_d_h_i_s");
            $tmp=explode('.', $file['name']);
            $file['name']=$tmp[0]."_$date_time".".$ext";
            $arr_ext=array('jpg', 'jpeg', 'gif', 'png'); //set allowed extensions

            if(in_array($ext, $arr_ext)){
                $upload=move_uploaded_file($file['tmp_name'], WWW_ROOT.$path.$file['name']);
                if($upload){
                    if($oldImage!='nopic.jpg'&&$oldImage!=NULL){
                        unlink(WWW_ROOT.$path.$oldImage);
                        return $file['name'];
                    }else{
                        return $file['name'];
                    }
                }else{
                    $this->Flash->success(__('Error In Image Updated'));
                }
            }else{
                return $file['name']=$oldImage;
            }
        }else{
            return $file['name']='nopic.jpg';
        }
    }

    /*
     * Unlink A image File...
     * */

    public function UnlinkImage($getImageName, $path)
    {
        if($getImageName!='nopic.jpg'&&$getImageName!=NULL){
            $unlink=unlink(WWW_ROOT.$path.$getImageName);
        }
    }

}
