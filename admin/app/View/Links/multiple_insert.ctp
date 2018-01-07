<br>
<div class="text-center">
    <h2>Add Mulitple Link Records</h2>
    <p>Please follow the below instructions and file formats to insert multiple video records. This Uploader supports only (.csv) file extensions if you are facing any problem then create an excel first and convert that excel file to csv file from <b><a target='_blank' href="https://convertio.co/xls-csv/">HERE</a></b>.</p>
</div>
<hr>
    <div class="row">
        <div class="col-xs-12">
            <ul class="list-group wizard-menu">
                <li class="list-group-item active step-1-menu" data-for=".step-1">
                    <h4 class="list-group-item-heading">1. First of all, arrange the records in an excel or csv format.</h4>
                    <p>Important fields need to be arranged in excel or csv file are:
                    <ol>
                        <li><b>Link URL</b>  in  <b>1st Column</b> with YouTube's embeded links For e.g. https://www.youtube.com/embed/QE8DQTXRBEA</li>
                        <li><b>Link Title</b>  in  <b>2nd Column</b></li>
                        <li><b>Link Description</b>  in  <b>3rd Column</b></li>
                        <li><b>Subject (વિષય)</b>  in  <b>4th Column</b></li>
                        <li><b>Topic name</b>  in  <b>5th Column</b></li>
                        <li><b>Sub Topic name</b>  in  <b>5th Column</b> (Optional)</li>
                    </ol>
                    </p>
                    <p><u>Please Note:</u> Topic name is mandatory to be there in the record and Sub Topic name is optional. There is no need for Headers in the file. Also Topic name and Sub Topic name must be there in our database with its relation. If not then please add it first then do this process. For more info Click the Download link.</p>
                    <?php echo "<a href='".$this->webroot."files/link/ev-testing.csv' class='btn btn-sm btn-info' download><span class='glyphicon glyphicon-circle-arrow-down'></span> Download the Sample CSV</a>";
                    ?>
                </li>
                <li class="list-group-item step-2-menu" data-for=".step-2">
                    <?php 
                        echo $this->Form->create('Link',array('controller'=>'Links','url'=>'multiple_insert','type'=>'file'));
                         echo $this->Form->input('file',array(
                             'class'=>'form-error',
                             'error'=>array('attributes'=>array('wrap'=>'small','class'=>'error')),
                             'errorMessage'=>true,
                             'class'=>'form-control',
                             'type'=>'file',
                              'required',
                              'autofocus',
                            'label'=>'Links') );
                      echo "<br/>";
                         
                        echo $this->Form->input('Add links',array(
                         'type'=>'submit',
                         'div'=>false,
                         'label'=>false,
                         'class'=>'btn btn-lg btn-success btn-block'
                         ));      
                         echo "<br/>";
                         echo "<br/>";                         

                    ?>
                </li>
            </ul>
        </div>
    </div>
