<?php $__env->startSection('content'); ?>
 <div class="app no-padding no-footer layout-static">
        <div class="session-panel">
            <div class="session">
             <div class="text-xs-center"> <br><h7>Ministry of Health</h7><br><h7>Zambia</h7><br><a href="http://www.moh.gov.zm" target="blank"><img class="expanding-hidden" src="../resources/assets/images/Coat_of_arms_of_Zambia.png" style="width:80px; height:80px;" alt=""></a>
            </div>
                <div class="session-content">
                    <div class="card card-block form-layout">
                         <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/login')); ?>">
                        <?php echo e(csrf_field()); ?>

                          <div class="text-xs-center m-b-3"> <img class="expanding-hidden" src="../resources/assets/images/logo_v2_color_300x100.png" style="width:50%;height=50%;" alt="">
                            </div>
                             <fieldset class="form-group">
                                <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label> 
                                    
                                        <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">

                                        <?php if($errors->has('email')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('email')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                    
                                </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    
                                        <input id="password" type="password" class="form-control" name="password">

                                        <?php if($errors->has('password')): ?>
                                            <span class="help-block">
                                                <strong><?php echo e($errors->first('password')); ?></strong>
                                            </span>
                                        <?php endif; ?>
                                     
                                </div>
                            </fieldset> 

                            <div class="form-group">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-info btn-block btn-lg btn-blue">
                                         Login
                                    </button>

                                    <a class="btn btn-link" href="<?php echo e(url('/password/reset')); ?>">Forgot Your Password?</a>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                        </div>
                    </form>
                    </div>
                    
                    
                </div> 
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>