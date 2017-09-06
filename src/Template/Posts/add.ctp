<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-o"></i> <?php echo $this->request->params['controller']; ?> Add New Post
            <small>advanced post</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#"><?php echo $this->request->params['controller']; ?> </a></li>
        </ol>
    </section>
    <section class="content">
        <?php echo $this->Flash->render();?>
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Quick Example</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php echo $this->Form->create($post, ['type' => 'file']);?>
                    <!--<form method="post" action="/posts/add">-->
                        <div class="box-body">
                            <div class="form-group">
                                <?php echo $this->Form->label('Title');?>
                                <?php echo $this->Form->text('title', ['type' => 'text', 'class' => 'form-control', "placeholder"=>"Enter Title"])?>
                            </div>
                            <div class="form-group">                              
                                <?php echo $this->Form->label('Description');?>
                                <?php echo $this->Form->text('description', ['type' => 'textarea', 'class' => 'form-control', "placeholder"=>"Enter Title"])?>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <?php echo $this->Form->button('Submit', ["class"=>"btn btn-primary"]);?>
                        </div>
                    <?php echo $this->Form->end(); ?>
                </div><!-- /.box -->
            </div><!--/.col (left) -->
            <!-- right column -->
        </div>   <!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
