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
    echo $this->Html->css('admin/plugins/font-awesome/css/font-awesome.min');
    echo $this->Html->css('admin/plugins/daterangepicker/daterangepicker-bs3');
    echo $this->Html->css('admin/plugins/iCheck/all');
    echo $this->Html->css('admin/plugins/colorpicker/bootstrap-colorpicker.min');
    echo $this->Html->css('admin/plugins/timepicker/bootstrap-timepicker.min');
    echo $this->Html->css('admin/plugins/select2/select2.min');
    echo $this->Html->css('admin/dist/css/AdminLTE.min');
    echo $this->Html->css('admin/dist/css/sb-LTE3');
    echo $this->Html->css('admin/css/angular-ui-notification.min');
    echo $this->Html->css('admin/dist/css/skins/_all-skins.min');
    echo $this->Html->css('admin/plugins/iCheck/square/blue');
    
    echo $this->Html->script('admin/plugins/jQuery/jQuery-2.1.4.min'); 
    ?>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0-rc.1/angular.min.js"></script> 
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
    <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
    <?php echo $this->element('admin/header'); echo $this->fetch('content'); echo $this->element('admin/footer'); ?>
<?php 
echo $this->Html->script('admin/bootstrap/js/bootstrap.min'); 
echo $this->Html->script('admin/js/jquery-ui.min'); 
echo $this->Html->script('admin/plugins/iCheck/icheck.min'); 
echo $this->Html->script('admin/plugins/select2/select2.full.min'); 
echo $this->Html->script('admin/plugins/input-mask/jquery.inputmask'); 
echo $this->Html->script('admin/plugins/input-mask/jquery.inputmask.date.extensions'); 
echo $this->Html->script('admin/plugins/input-mask/jquery.inputmask.extensions');
echo $this->Html->script('admin/plugins/input-mask/jquery.inputmask.numeric.extensions');
echo $this->Html->script('admin/plugins/input-mask/jquery.inputmask.phone.extensions');
echo $this->Html->script('admin/plugins/input-mask/jquery.inputmask.regex.extensions');
echo $this->Html->script('admin/dist/js/jquery_numeric_input');

echo $this->Html->script('admin/js/moment.min'); 
echo $this->Html->script('admin/plugins/daterangepicker/daterangepicker'); 
echo $this->Html->script('admin/plugins/colorpicker/bootstrap-colorpicker.min'); 
echo $this->Html->script('admin/plugins/timepicker/bootstrap-timepicker.min'); 
echo $this->Html->script('admin/plugins/slimScroll/jquery.slimscroll.min'); 
echo $this->Html->script('admin/plugins/iCheck/icheck.min'); 
echo $this->Html->script('admin/plugins/fastclick/fastclick.min'); 
echo $this->Html->script('admin/dist/js/app.min'); 
echo $this->Html->script('admin/dist/js/demo'); 
echo $this->Html->script('admin/plugins/metisMenu/dist/metisMenu.min'); 
echo $this->Html->script('admin/js/jquery.validate.min'); 
echo $this->Html->script('admin/dist/js/sb-LTE3'); 
echo $this->Html->script('admin/dist/js/formv3'); 
echo $this->Html->script('admin/js/ui-bootstrap-tpls-0.10.0.min'); 
echo $this->Html->script('admin/js/raphael-min');
echo $this->Html->script('admin/plugins/morris/morris.min');
echo $this->Html->script('admin/plugins/sparkline/jquery.sparkline.min');
echo $this->Html->script('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min');
echo $this->Html->script('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en');
echo $this->Html->script('admin/plugins/knob/jquery.knob');
echo $this->Html->script('admin/plugins/datepicker/bootstrap-datepicker');
echo $this->Html->script('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min');
echo $this->Html->script('admin/dist/js/pages/dashboard');
?>
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
</body>
</html>
