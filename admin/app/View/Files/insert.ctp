<br/>
<h1>Add link</h1>
<hr>
<?php
    echo $this->Form->create('File',array('type' => 'file','multiple','controller'=>'Files','action'=>'insert'));
    echo $this->Form->input('id',array('type'=>'hidden'));
    echo $this->Form->input('subject_id',array(
            'class'=>'form-control',
            'options'=>$sb,
            'required',
            'empty'=>'Select sub topic',
            'label'=>'Sub topic'
        ));