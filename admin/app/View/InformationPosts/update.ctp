<br/>
<div class="panel panel-default">
    <div class="panel-heading"><h4>Update post</h4></div>
    <div class="panel-body">
    <?php
        echo $this->Form->create('InformationPost',array('type'=>'file','controller'=>'InformationPosts','action'=>'update'));
        echo $this->Form->input('title',array('type'=>'text','class'=>'form-control','required','label'=>'Title','placeholder'=>'Post title'));
        echo $this->Form->input('id',array('type'=>'hidden'));
        echo "<br>";

        echo $this->Form->input('meta_description',array(
            'type'=>'textarea',
            'class'=>'form-control'
        ));
        echo "<br>";
        echo $this->Form->input('updated_by',array('type'=>'hidden','value' => $user));
            echo "<br/>";
        echo $this->Form->input('Update post',array(
             'type'=>'submit',
             'div'=>false,
             'label'=>false,
             'class'=>'btn btn-md btn-info'
             ));  
    ?>
</div>
</div>