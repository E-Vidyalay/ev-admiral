<?php
class GalleryPhoto extends AppModel{
		public $actsAs = array(
        'Upload.Upload' => array(
            'file_name' => array(

                'mimetypes'=> array('image/jpg','image/jpeg', 'image/png'),
                'thumbnailMethod'=>"php",
                'extensions'=> array('jpg','png','JPG','PNG','jpeg','JPEG'),
                'thumbnailSizes' => array(
                    'big' => '600x600',
                    'large' => '400x400',
                    'medium' => '200x200',
                    'small' => '100x100'
                ),
                'fields' => array(
                    'dir' => 'file_dir'
                )
            )
        )
    );
}
?>