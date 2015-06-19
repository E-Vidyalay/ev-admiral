<br/>
<div class="panel panel-default">
    <div class="panel-heading"><h4>Update article</h4></div>
    <div class="panel-body">
    <?php
        echo $this->Form->create('LiteraturePost',array('type'=>'file','controller'=>'LiteraturePosts','action'=>'update'));
        echo $this->Form->input('title',array('type'=>'text','class'=>'form-control','required','label'=>'Title','placeholder'=>'Article title'));
        echo $this->Form->input('id',array('type'=>'hidden'));
        echo "<br>";

        echo $this->Form->input('meta_description',array(
            'type'=>'textarea',
            'class'=>'form-control'
        ));
        echo "<br>";
        echo $this->Form->input('level_id',array('type'=>'select','class'=>'form-control','required','options'=>$levels,'empty'=>'Select level','label'=>'Select level'));
        echo "<br>";
        echo $this->Form->input('sub_literature_id',array('type'=>'select','class'=>'form-control','required','options'=>$sl,'empty'=>'Select type','label'=>'Select type'));
        echo "<br>";


        echo $this->Form->input('updated_by',array('type'=>'hidden','value' => $user));
            echo "<br/>";
        echo $this->Form->input('Update article',array(
             'type'=>'submit',
             'div'=>false,
             'label'=>false,
             'class'=>'btn btn-md btn-info'
             ));  
    ?>
</div>
</div>