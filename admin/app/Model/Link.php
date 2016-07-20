<?php
App::uses('File', 'Utility');
App::uses('Folder', 'Utility');
class Link extends AppModel{
	public $belongsTo=array(
			'Topic'=>array(
				'className'=>'Topic',
				'foreignKey'=>'topic_id',
				'dependent'=>true
			),
			'SubTopic'=>array(
				'className'=>'SubTopic',
				'foreignKey'=>'sub_topic_id',
				'dependent'=>false
			)
		);	
    public $validate = array(
        'link_url'=>array(
            'url'=>array(
                'rule'=>array('url',true),
                'required' => true,
                'allowEmpty' => false,
                'message'=>'Please enter a valid Video Url'
        )),
        'tags'=>array(
            'rule'=>array('tagRequires'),
            'message'=>"Description can't be empty",
            'required' => true,
            'allowEmpty' => false
        )
    );
    public $actsAs = array(
        'Upload.Upload' => array(
            'file' => array(
                'fields' => array(
                    'dir' => 'file_dir'
                )
            )
        )
    );
    var $topic_id;
    
     
    function import($filename,$topic_id,$sub_topic_id) {
        // to avoid having to tweak the contents of
        // $data you should use your db field name as the heading name
        // eg: Post.id, Post.title, Post.description
 
        // set the filename to read CSV from
        //
     

       
        $filename = TMP . 'uploads' . DS . 'Link' . DS . $filename;
        // open the file
        $handle = fopen($filename, "r");
         
        // read the 1st row as headings
        $header = fgetcsv($handle);
        // pr($header);
        // create a message container
        $return = array(
            'messages' => array(),
            'errors' => array(),
        );
        $i=0;
        $error="";
     //    $h_id="5";
        // read each data row in the file
        while (($row = fgetcsv($handle)) !== FALSE) {
            $i++;
            $data = array();
 
            // for each header field
            foreach ($header as $k=>$head) {
                // get the data field from Model.field

                if (strpos($head,'.')!==false) {
                    $h = explode('.',$head);
                    $data[$h[0]][$h[1]]=(isset($row[$k])) ? $row[$k] : '';
                }
                // get the data field from field
                else {
                    $data['Link'][$head]=(isset($row[$k])) ? $row[$k] : '';
                    $data['Link']['topic_id']=$topic_id;
                    $data['Link']['sub_topic_id']=$sub_topic_id;
                    
                }
            }
            // pr($data);

            // see if we have an id            
            $id = isset($data['Link']['id']) ? $data['Link']['id'] : 0;
 
            // we have an id, so we update
            if ($id) {
                // there is 2 options here,
                  
                // option 1:
                // load the current row, and merge it with the new data
                //$this->recursive = -1;
                //$post = $this->read(null,$id);
                //$data['Post'] = array_merge($post['Post'],$data['Post']);
                 
                // option 2:
                // set the model id
                $this->id = $id;
            }
             
            // or create a new record
            else {
                $this->create();
            }
             
            // see what we have
             //debug($data);
             
            // validate the row
            $this->set($data);
            if (!$this->validates()) {
                //$this->_flash(,'warning');
                $return['errors'][] = __(sprintf('Post for Row %d failed to validate.',$i), true);
            }
 
            // save the row
            if (!$error && !$this->save($data)) {
                $return['errors'][] = __(sprintf('Post for Row %d failed to save.',$i), true);
            }
 
            // success message!
            if (!$error) {
                $return['messages'][] = __(sprintf('Post for Row %d was saved.',$i), true);
            }
        }
         
        // close the file
        fclose($handle);
         
        // return the messages
        return $return;
         
    }
    public function tagRequires($check) {
        // $check will have value: array('promotion_code' => 'some-value')
        // $limit will have value: 25
        $texttostrip = strip_tags($check);
        if($texttostrip != ""){
            return false;
        }
        else{
            return true;
        }
    }
}
?>
