<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Admin</b>LTE</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <?php //echo $this->Flash->render();echo $this->Session->flash('error'); ?>
        <div class="alert alert-danger">
            <strong>Danger!</strong> <?php echo $this->Flash->render();//echo $this->Session->flash('error'); ?>
        </div>

        <?php echo $this->Form->create(null, array('url' => array('controller' => 'Users', 'action' => 'login'))); ?>
        <div class="form-group has-feedback">
        <?php echo $this->Form->input('User.username', array('label' => FALSE, 'id' => 'username', 'type' => 'text', 'class' => 'form-control', 'required' => 'required', 'placeholder' => 'Enter Username', 'after' => '<span class="glyphicon glyphicon-envelope form-control-feedback"></span>')); ?>
        </div>
        <div class="form-group has-feedback">
        <?php echo $this->Form->input('User.password', array('label' => FALSE, 'id' => 'password', 'type' => 'password', 'class' => 'form-control', 'required' => 'required', 'placeholder' => 'Enter Password', 'after' => '<span class="glyphicon glyphicon-lock form-control-feedback"></span>')) ?>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox"> Remember Me
                    </label>
                </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
        <?php echo $this->Form->submit('Login', array('value' => 'Sign In', 'class' => 'btn btn-primary btn-block btn-flat', 'id' => 'submit')); ?>
            </div><!-- /.col -->
        </div>
        <?php echo $this->Form->end(); ?>

        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div><!-- /.social-auth-links -->

        <a href="#">I forgot my password</a><br>
        <a href="register.html" class="text-center">Register a new membership</a>

    </div><!-- /.login-box-body -->
</div><!-- /.login-box --> 

