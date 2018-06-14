<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('add-user')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>">

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                         <div class="form-group<?php echo e($errors->has('roles') ? ' has-error' : ''); ?>">
                            <label for="roles" class="col-md-4 control-label">Roles</label>

                            <div class="col-md-6">
                                <select type="roles" name="roles" class="form-control" id="roles">
                                    <option value="admin">Admin</option>     
                                    <option value="viewer-province">Province</option>
                                    <option value="viewer-district">District</option>
                                    <option value="viewer-facility">Facility</option>
                                    <option value="viewer-zone">Zone</option>   
                                  </select>

                                <?php if($errors->has('roles')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('roles')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div> 

                        <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                <?php if($errors->has('password_confirmation')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('province') ? ' has-error' : ''); ?>">
                            <label id="label-province" for="province" class="col-md-4 control-label">Province</label>

                            <div class="col-md-6"> 
                                  <select type="province" name="province" class="form-control" id="province">
                                   <?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <option><?php echo e($province->province); ?></option>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>

                                <?php if($errors->has('province')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('province')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('district') ? ' has-error' : ''); ?>">
                            <label id="label-district" for="district" class="col-md-4 control-label">District</label>

                            <div class="col-md-6"> 
                                  <select type="district" name="district" class="form-control" id="district">
                                    <option></option> 
                                  </select>

                                <?php if($errors->has('district')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('district')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('facility') ? ' has-error' : ''); ?>">
                            <label id="label-facility" for="facility" class="col-md-4 control-label">Facility</label>

                            <div class="col-md-6"> 
                                  <select type="facility" name="facility" class="form-control" id="facility">
                                    <option></option> 
                                  </select>

                                <?php if($errors->has('facility')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('facility')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('zone') ? ' has-error' : ''); ?>">
                            <label id="label-zone" for="zone" class="col-md-4 control-label">Zone</label>

                            <div class="col-md-6"> 
                                  <select type="zone" name="zone" class="form-control" id="zone">
                                    <option></option> 
                                  </select>

                                <?php if($errors->has('zone')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('zone')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../resources/assets/vendor/jquery/jquery.min.js"></script>
<script src="../resources/assets/js/app.min.js"></script>  
<script src="../resources/assets/js/communityregister/select.drop.down.js"></script>  

<script type="text/javascript"> 
     $(document).ready(function() {  
             $('#province').hide();
             $('#label-province').hide();
             $('#district').hide(); 
             $('#label-district').hide(); 
             $('#facility').hide();
             $('#label-facility').hide();
             $('#zone').hide(); 
             $('#label-zone').hide(); 
             $("#roles").on('change', function(e){
               var roles = e.target.value;  
               if(roles == 'admin')
               {
                 $('#province').hide();
                 $('#label-province').hide();
                 $('#district').hide(); 
                 $('#label-district').hide();  
                 $('#facility').hide();
                 $('#label-facility').hide();
                 $('#zone').hide(); 
                 $('#label-zone').hide(); 
               }
               if(roles == 'viewer-province')
               {
                 $('#province').show();
                 $('#label-province').show();
                 $('#district').hide();  
                 $('#label-district').hide(); 
                 $('#facility').hide();
                 $('#label-facility').hide();
                 $('#zone').hide(); 
                 $('#label-zone').hide(); 
               }
               if(roles == 'viewer-district')
               {
                 $('#province').show();
                 $('#label-province').show();
                 $('#district').show();  
                 $('#label-district').show(); 
                 $('#facility').hide();
                 $('#label-facility').hide();
                 $('#zone').hide(); 
                 $('#label-zone').hide(); 
               } 
               if(roles == 'viewer-facility')
               {
                 $('#province').show();
                 $('#label-province').show();
                 $('#district').show();  
                 $('#label-district').show(); 
                 $('#facility').show();
                 $('#label-facility').show();
                 $('#zone').hide(); 
                 $('#label-zone').hide(); 
               } 
               if(roles == 'viewer-zone')
               {
                 $('#province').show();
                 $('#label-province').show();
                 $('#district').show();  
                 $('#label-district').show(); 
                 $('#facility').show();
                 $('#label-facility').show();
                 $('#zone').show(); 
                 $('#label-zone').show(); 
               } 
               
         });  
      });

      

</script> 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.blog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>