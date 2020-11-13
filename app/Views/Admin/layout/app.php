           <?= $this->include('admin/layout/header'); ?>
           <?= $this->include('admin/layout/sidebar'); ?>
           <!-- Main content -->
           <div class="content">
               <?= $this->renderSection('content'); ?>
           </div>
           <!-- /.content -->
           <?= $this->include('admin/layout/footer'); ?>