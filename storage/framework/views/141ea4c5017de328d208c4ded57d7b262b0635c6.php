
  

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
            <h3 class="card-title">Add Department</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form method="post" action="<?php echo e(route('department_add_action')); ?>" >
            <?php echo csrf_field(); ?>
            <div class="card-body">

            <div class="form-group">
                <label for="name">Department Name</label>
                <input type="text" autocomplete="off" class="form-control" id="dept_name" name="dept_name" placeholder="Department Name">
              </div>  

              <div class="form-group">
                <label for="code">Department Short Name</label>
                <input type="text" autocomplete="off" class="form-control" id="dept_short_name" name="dept_short_name" placeholder="Enter Short Name">
              </div>  

            <div class="form-group">
                <label for="address">Type Description</label>
                <input type="text" autocomplete="off" class="form-control" id="dep_description" name="dep_description" placeholder="Enter Short Description">
              </div>  

              

        <!--
              <div class="form-group">
                <label for="exampleInputFile">department Logo</label>
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
              <button type="submit" class="btn btn-primary">Submit</button>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hr_batch1_mid\resources\views/settings/departments/add.blade.php ENDPATH**/ ?>