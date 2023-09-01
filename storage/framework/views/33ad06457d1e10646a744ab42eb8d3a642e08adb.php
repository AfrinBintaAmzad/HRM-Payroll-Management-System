
  

<?php $__env->startSection('content_header'); ?>
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Department</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Home</a></li>
          <li class="breadcrumb-item active">Department</li>
        </ol>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
<?php $__env->stopSection(); ?>  
  
<?php $__env->startSection('main_content'); ?>


  
   <div class="container-fluid">
   
        <div class="row">
            <!-- left column -->
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">View Department List</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form method="post" action="<?php echo e(route('update_department')); ?>" >
            <?php echo csrf_field(); ?>
            <div class="card-body">

        
            <div class="form-group">
                <label for="">Name</label>
                <input type="hidden"  class="form-control" id="id" name="id"  value="<?php echo e($department_info->id); ?>" >
                <input type="text" autocomplete="off" class="form-control" id="dept_name" name="dept_name" placeholder="dept_name" value="<?php echo e($department_info->dept_name); ?>" >
              </div>  

              <div class="form-group">
                <label for="">Company Account</label>
                <input type="text" autocomplete="off" class="form-control" id="dept_short_name" name="dept_short_name" placeholder="dept_short_name" value="<?php echo e($department_info->dept_short_name); ?>">
              </div>  

            <div class="form-group">
                <label for="">Branch Name</label>
                <input type="text" autocomplete="off" class="form-control" id="dep_description" name="dep_description" placeholder="dep_description" value="<?php echo e($department_info->dep_description); ?>">
              </div>  
        <!--
              <div class="form-group">
                <label for="exampleInputFile">Company Logo</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
        -->      
             
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              
              <a href="<?php echo e(route('department_list')); ?>">  <button type="button" class="btn btn-primary">Go Back</button> </a>
              
            </div>
          </form>
        </div>
        <!-- /.card -->

           

      </div>
      <!--/.col (left) -->
        </div>

   
    </div>
    <!-- /.row -->
   
    
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>   
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hr_batch1_mid\resources\views/settings/departments/view.blade.php ENDPATH**/ ?>