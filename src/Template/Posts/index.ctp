<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-file-o"></i> <?php echo $this->request->params['controller']; ?> Manager
            <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#"><?php echo $this->request->params['controller']; ?> </a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php echo $this->Flash->render();?>
        <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title"><i class="glyphicon glyphicon-list"></i> <?php echo $this->request->params['controller']; ?> List</h3>
                            <div class="pull-right">
                            <?php echo $this->Html->link( $this->Html->tag('i', '', ['class' => 'glyphicon glyphicon-plus'])  .' Add Records', ["class"=>"btn btn-large btn-info", 'action' => 'add'], ['escape'=>false]) ?>
                            <a href="#" class="btn btn-large btn-info " ><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Records</a>
                            <button type="submit" class="btn btn-primary" name="btn-deletemuliple">
                                <span class="glyphicon glyphicon-trash"></span> Delete Records</button>
                            </div>
                        </div><!-- /.box-header -->


                        <div class="box-body table-responsive dataTable_wrapper">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Posted on</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0;if(!empty($posts)): foreach($posts as $post): $i++;?>
                                    <tr>
                                        <td><?=$i;?></td>
                                        <td><?= $post->title; ?></td>
                                        <td><?= $post->description; ?></td>
                                        <td><?= $post->created; ?></td>
                                        <td> 
                                        <?php echo $this->Html->link( $this->Html->tag('i', '', ['class' => 'glyphicon glyphicon-edit'])  .' Edit', ['action' => 'edit', $post->id], ['escape'=>false]) ?>
                                        <?= $this->Form->postLink('Delete',['action' => 'delete', $post->id],['confirm' => 'Are you sure?']);?>
                                        </td>                                                                                           
                                    </tr>
                                    <?php endforeach; else: ?>
                                        <p class="no-record">No post(s) found......</p>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->                
                </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->