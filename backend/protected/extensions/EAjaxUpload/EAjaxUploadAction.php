<<<<<<< HEAD
<?php

Yii::import("ext.EAjaxUpload.qqFileUploader");

class EAjaxUploadAction extends CAction
{

        public function run()
        {
                // list of valid extensions, ex. array("jpeg", "xml", "bmp")
                $allowedExtensions = array("jpg");
                // max file size in bytes
                $sizeLimit = 1 * 1024 * 1024;

                $uploader = new qqFileUploader($allowedExtensions, $sizeLimit);
                $result = $uploader->handleUpload('upload/');
                // to pass data through iframe you will need to encode all html tags
                $result=htmlspecialchars(json_encode($result), ENT_NOQUOTES);
                echo $result;
        }
}
=======
<?php

Yii::import("ext.EAjaxUpload.qqFileUploader");

class EAjaxUploadAction extends CAction
{

        public function run()
        {
                // list of valid extensions, ex. array("jpeg", "xml", "bmp")
                $allowedExtensions = array("jpg");
                // max file size in bytes
                $sizeLimit = 1 * 1024 * 1024;

                $uploader = new qqFileUploader($allowedExtensions, $sizeLimit);
                $result = $uploader->handleUpload('upload/');
                // to pass data through iframe you will need to encode all html tags
                $result=htmlspecialchars(json_encode($result), ENT_NOQUOTES);
                echo $result;
        }
}
>>>>>>> 402c32a9249f3b941fa3a3a2066f3aa6277c3ec3
