    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <?php echo $this->Html->image('ev-logo.png',array('style'=>'display: block;margin-left: auto;margin-right: auto;')); ?>
                        <h4 style="text-align:center">ઈ-વિદ્યાલય | એડમીન લોગીન</h4>
                    </div>
                    <div class="panel-body">
                        <?php echo $this->Form->create('Admin',array('controller'=>'admins','url'=>'login')) ?>
                            <fieldset>
                                <div class="form-group">
                                    <?php echo $this->Form->input('username',array(
                                            'class'=>'form-control',
                                            'placeholder'=>'ઈ-મેલ',
                                            'type'=>'text',
                                            'required',
                                            'autofocus',
                                            'label'=>false
                                        ));
                                    ?>
                                </div>
                                <div class="form-group">
                                    <?php echo $this->Form->input('password',array(
                                            'class'=>'form-control',
                                            'placeholder'=>'પાસવર્ડ',
                                            'type'=>'password',
                                            'required',
                                            'autofocus',
                                            'label'=>false
                                        ));
                                    ?>
                                </div>
                                <?php
                                    echo $this->Form->input('લોગીન',array(
                                            'type'=>'submit',
                                            'div'=>false,
                                            'label'=>false,
                                            'class'=>'btn btn-lg btn-success btn-block'
                                        ));
                                ?>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                <?php
                        echo $this->Html->link('તમારો પાસવર્ડ ભૂલી ગયા?',array('controller' => 'admins', 'action' => 'forgot_password'),array('escape' => false));?>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <a href="http://evidyalay.net"><i class="fa fa-arrow-left fa-fw"></i> Back to Evidyalay</a>
                    </div>
                </div>
                <?php 
                    echo $this->Session->flash('success');
                    echo $this->Session->flash('error');
                    echo $this->Session->flash('auth', array('params'=>array('class'=>'alert alert-danger')));
                ?>
            </div>
        </div>
    </div>