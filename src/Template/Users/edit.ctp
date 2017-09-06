<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Admin</b>LTE</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Add New User</p>
        <?php echo $this->Flash->render();?>        
        <?= $this->Form->create($user) ?>
        <div class="form-group has-feedback">
        <?php echo $this->Form->input('username', array('label' => FALSE, 'disable' => 'disable', 'id' => 'username', 'type' => 'text', 'class' => 'form-control', 'required' => 'required', 'placeholder' => 'Enter Username', 'after' => '<span class="glyphicon glyphicon-envelope form-control-feedback"></span>')); ?>
        </div>
        <div class="form-group has-feedback">
        <?php echo $this->Form->input('email', array('label' => FALSE, 'id' => 'email', 'type' => 'text', 'class' => 'form-control', 'required' => 'required', 'placeholder' => 'Enter Email', 'after' => '<span class="glyphicon glyphicon-lock form-control-feedback"></span>')) ?>
        </div>
        <div class="form-group has-feedback">
        <?php echo $this->Form->input('password', array('label' => FALSE, 'value' => FALSE, 'id' => 'password', 'type' => 'password', 'class' => 'form-control', 'required' => 'required', 'placeholder' => 'Enter Password', 'after' => '<span class="glyphicon glyphicon-lock form-control-feedback"></span>')) ?>
        </div>
        <div class="form-group has-feedback">
        <?php echo $this->Form->input('address', array('label' => FALSE, 'id' => 'address', 'type' => 'text', 'class' => 'form-control', 'required' => 'required', 'placeholder' => 'Enter Address', 'after' => '<span class="glyphicon glyphicon-lock form-control-feedback"></span>')) ?>
        </div>
        <div class="row">            
            <div class="col-xs-4">
                <?php echo $this->Form->submit('Submit', array('value' => 'Submit', 'class' => 'btn btn-primary btn-block btn-flat', 'id' => 'Submit')); ?>
            </div><!-- /.col -->
        </div>
        <?php echo $this->Form->end(); ?>        

    </div><!-- /.login-box-body -->
</div><!-- /.login-box --> 

