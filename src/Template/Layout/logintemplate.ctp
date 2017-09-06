<?php
$cakeDescription = 'Admin v0.1';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?php
        echo $this->Html->css('admin/bootstrap/css/bootstrap.min');
        echo $this->Html->css('admin/dist/css/AdminLTE.min');
        echo $this->Html->css('admin/plugins/iCheck/square/blue');
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="hold-transition login-page">
    <?= $this->fetch('content') ?>
<?php 
    
    //echo $this->fetch('content');  
    echo $this->Html->script('admin/plugins/jQuery/jQuery-2.1.4.min'); 
    echo $this->Html->script('admin/bootstrap/js/bootstrap.min'); 
    echo $this->Html->script('admin/plugins/iCheck/icheck.min'); 
?>	
<script>
$(function () {
  $('input').iCheck({
    checkboxClass: 'icheckbox_square-blue',
    radioClass: 'iradio_square-blue',
    increaseArea: '20%' // optional
  });
});
</script>
</body>
</html>
