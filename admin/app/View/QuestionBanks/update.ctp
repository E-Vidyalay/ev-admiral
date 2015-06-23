<br/>
<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
            <h4>Question meta information</h4>
            </div>
            <div class="panel-body">
                <?php
                    echo $this->Form->create('QuestionBank',array('contoroller'=>'QuestionBanks','action'=>'update'));
                    echo $this->Form->input('id',array('type'=>'hidden'));
                    echo $this->Form->input('topic_id',array('type'=>'select','options'=>$topics,'label'=>'This question belongs to which topic?','class'=>'form-control','div'=>false,'empty'=>'Select topic','required','default','id'=>'topic'));
                    echo "<br/>";
                    echo "<div id='sbt_div'>";
                    if($has_sbt==true){
                        echo $this->Form->input('sub_topic_id',array('type'=>'select','empty'=>'Select sub topic','div'=>false,'label'=>'Does this question belong to any of the following sub topic?','class'=>'form-control','options'=>$sub_topics));
                    }
                    else{
                        echo $this->Form->input('sub_topic_id',array('type'=>'select','empty'=>'Select sub topic','div'=>false,'label'=>'Does this question belong to any of the following sub topic?','class'=>'form-control','options'=>$sbt));
                    }
                    echo "</div>";
                    echo "<br/>";
                    echo $this->Form->input('description',array('type'=>'text','class'=>'form-control','placeholder'=>'Eg. This question is given by Prof. M'))
                ?>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
            <h5> Choose Images</h5>
            </div>
            <div class="panel-body" style="height:238px;overflow-y:scroll">
            <div class="row">
            <?php foreach ($images as $image) {
            ?>
            
            <div class="col-lg-6 thumb" align="center">
            <?php echo '<img id="img_'.$image['Image']['id'].'" src="'.$this->webroot.'files/image/path/'.$image['Image']['id'].'/'.$image['Image']['path'].'" class="usr-img img-responsive" style="height:100px;width:100px"/>';
            echo '<br/>';
            echo '<a id="'.$image['Image']['id'].'" class="btn btn-info btn-sm copy">Copy Image Url</a>';
            ?>
            <br/>
            <br/>
            </div>
            
            <?php
            }
            ?>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading"><h4>Question and its options</h4></div>
    <div class="panel-body">
        <?php
            echo $this->Form->input('question',array(
                'type'=>'textarea',
                'class'=>'form-control',
                'id'=>'typingarea',
                'rows'=>'4',
                'label'=>'Question:',
                'style'=>'width:100%', 
            ));
        ?>
        <hr/>
       <h3>Answers for the above question</h3>
        <?php

        echo $this->Form->input('option1',array(
            'type'=>'textarea',
            'class'=>'form-control',    
            
            'label'=>'Option 1:',
            'style'=>'width:100%',
            
        ));
        echo "<br/>";
        echo $this->Form->input('option2',array(
            'type'=>'textarea',
            'class'=>'form-control',
            
            
            'label'=>'Option 2:',
            'style'=>'width:100%'
        ));
        echo "<br/>";
        echo $this->Form->input('option3',array(
            'type'=>'textarea',
            'class'=>'form-control',
            
            
            'label'=>'Option 3:',
            'style'=>'width:100%'
        ));
        echo "<br/>";
        echo $this->Form->input('option4',array(
            'type'=>'textarea',
            'class'=>'form-control',
            
            'rows'=>'1',
            'label'=>'Option 4:',
            'style'=>'width:100%'
        ));
        echo "<br/>";
        echo $this->Form->input('option5',array(
            'type'=>'textarea',
            'class'=>'form-control',
            
            'rows'=>'1',
            'label'=>'Option 5:',
            'style'=>'width:100%;'
        ));
        echo "<br/>";
        echo "<hr>";
        echo "<h3>Select correct answer for the above question</h3>";
        echo "<hr/>";
        for($i=1;$i<=5;$i++){
            echo $this->Form->input('QuestionBank.ans.'.$i,array(
                'type'=>'checkbox',
                'label'=>'option'.$i,
                'value'=>'option'.$i,
                'div'=>false
            ));
        }
        echo "<hr/>";
        echo $this->Form->input('Update question',array(
            'type'=>'submit',
            'class'=>'btn btn-success',
            'label'=>false,
            'div'=>false
            
        ));

        echo $this->Form->end();
        ?>
        <br/><br/>
    </div>
</div>