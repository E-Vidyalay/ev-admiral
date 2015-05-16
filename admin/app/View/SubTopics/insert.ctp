<br/>
<h3>Add new sub topic</h3>
<hr/>
<label>Standard</label>
<?php echo $this->Form->create('SubTopic',array('controller'=>'SubTopics','action'=>'insert'));
?>
<ul class="nav nav-tabs">
    <?php
        foreach ($standards as $s) {
            echo "<li class='std btn btn-default' role='presentation' id='".$s['Standard']['id']."'>".$s['Standard']['standard']."</li>";
            echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        }
    ?>
    <div id="subject-list"></div>
    <div id="subject-list-topic"></div>
    <div id="subtopic"></div>
</ul>

