 <!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
  
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,AngularJS,Angular,Angular2,Angular 2,Angular4,Angular 4,jQuery,CSS,HTML,RWD,Dashboard,React,React.js,Vue,Vue.js">
  <link rel="shortcut icon" href="img/favicon.png"> 
  <title><?php echo e(config('app.name', 'mVaccination - Zambia')); ?></title>

  <!-- Icons -->
  <link href="../resources/assets/template/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../resources/assets/template/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
  <!-- Page level plugin CSS-->
  <link href="../resources/assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Main styles for this application -->
  <link href="../resources/assets/css/style.css" rel="stylesheet"> 
  <!-- Styles required by this views -->

   <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2017.3.1026/styles/kendo.common-material.min.css" />
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2017.3.1026/styles/kendo.material.min.css" />
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2017.3.1026/styles/kendo.material.mobile.min.css" />
 
</head>
<body>
  
<div id="print-content" class="app">
         <div class="off-canvas-overlay" data-toggle="sidebar"></div>
          <div class="sidebar-panel"><!--Sidebar-->
            <div class="brand"> 
         
            <img class="expanding-hidden" src="../resources/assets/images/logo_v2_white_300x100.png" style="height:75%;width:75%;" alt=""><a class="brand-logo"> </a>
             <p style="color:#FFF;text-align:center">
             <h5 style="color:#FFF;">Dashboard</h5><br>
            </div>
            <nav>
            <ul class="nav"><BR></ul>
               <ul class="nav">
                <?php if(Auth::user()->roles == 'admin'): ?>
                  <li><a href="<?php echo e(route('home')); ?>"><i class="material-icons">home</i>   <span>Home</span></a></li>
                  
                <?php elseif(Auth::user()->roles == 'viewer-province'): ?>
                  <li><a href="<?php echo e(route('province')); ?>"><i class="material-icons">home </i> <span>Home</span></a></li>

                <?php elseif(Auth::user()->roles == 'viewer-district'): ?>
                  <li><a href="<?php echo e(route('district')); ?>"><i class="material-icons">home </i> <span>Home</span></a></li>

                <?php elseif(Auth::user()->roles == 'viewer-facility'): ?>
                  <li><a href="<?php echo e(route('facility')); ?>"><i class="material-icons">home </i> <span>Home</span></a></li>
                  
                <?php else: ?>
                  <li><a href="<?php echo e(route('zone')); ?>"><i class="material-icons">home</i> <span>Home</span></a></li>
                  
                <?php endif; ?>  
                <?php if(Auth::user()->roles == 'admin'): ?>
                 <li>
                     <a href="javascript:;"><span class="menu-caret"><i class="material-icons">arrow_drop_down</i> </span><i class="material-icons">trending_up</i><span>Coverage</span></a>
                     <ul class="sub-menu">
                              <li><a href="<?php echo e(route('province')); ?>"><i class="material-icons">keyboard_arrow_right</i><span>By province</span></a></li>
                              <li><a href="<?php echo e(route('district')); ?>"><i class="material-icons">keyboard_arrow_right</i><span>By district</span></a></li> 
                              <li><a href="<?php echo e(route('facility')); ?>"><i class="material-icons">keyboard_arrow_right</i><span>By facility</span></a></li> 
                              <li><a href="<?php echo e(route('zone')); ?>"><i class="material-icons">keyboard_arrow_right</i><span>By zone</span></a></li> 
                     </ul>
                  </li> 
                 <?php endif; ?>  
                 <?php if(Auth::user()->roles == 'viewer-province'): ?>
                 <li>
                     <a href="javascript:;"><span class="menu-caret"><i class="material-icons">arrow_drop_down</i> </span><i class="material-icons">trending_up</i><span>Coverage</span></a>
                     <ul class="sub-menu"> 
                              <li><a href="<?php echo e(route('district')); ?>"><i class="material-icons">keyboard_arrow_right</i><span>By district</span></a></li> 
                              <li><a href="<?php echo e(route('facility')); ?>"><i class="material-icons">keyboard_arrow_right</i><span>By facility</span></a></li> 
                              <li><a href="<?php echo e(route('zone')); ?>"><i class="material-icons">keyboard_arrow_right</i><span>By zone</span></a></li>
                     </ul>
                  </li> 
                 <?php endif; ?>  
                 <?php if(Auth::user()->roles == 'viewer-district'): ?>
                 <li>
                     <a href="javascript:;"><span class="menu-caret"><i class="material-icons">arrow_drop_down</i> </span><i class="material-icons">trending_up</i><span>Coverage</span></a>
                     <ul class="sub-menu">  
                              <li><a href="<?php echo e(route('facility')); ?>"><i class="material-icons">keyboard_arrow_right</i><span>By facility</span></a></li> 
                              <li><a href="<?php echo e(route('zone')); ?>"><i class="material-icons">keyboard_arrow_right</i><span>By zone</span></a></li>
                     </ul>
                  </li> 
                 <?php endif; ?>  
                 <?php if(Auth::user()->roles == 'viewer-facility'): ?>
                 <li>
                     <a href="javascript:;"><span class="menu-caret"><i class="material-icons">arrow_drop_down</i> </span><i class="material-icons">trending_up</i><span>Coverage</span></a>
                     <ul class="sub-menu">   
                              <li><a href="<?php echo e(route('zone')); ?>"><i class="material-icons">keyboard_arrow_right</i><span>By zone</span></a></li>
                     </ul>
                  </li> 
                 <?php endif; ?>  
                <?php if(Auth::user()->roles == 'admin'): ?>
                 <li>
                     <a href="javascript:;"><span class="menu-caret"><i class="material-icons">arrow_drop_down</i> </span><i class="material-icons">trending_up</i><span>Export</span></a>
                     <ul class="sub-menu">
                  <li><a href="<?php echo e(route('provinces')); ?>"><i class="material-icons">keyboard_arrow_right</i><span>Provinces</span></a></li>
                              <li><a href="<?php echo e(route('districts')); ?>"><i class="material-icons">keyboard_arrow_right</i><span>Districts</span></a></li>
                              <li><a href="<?php echo e(route('facilities')); ?>"><i class="material-icons">keyboard_arrow_right</i><span>Health Facilities</span></a></li>
                              <li><a href="<?php echo e(route('zones')); ?>"><i class="material-icons">keyboard_arrow_right</i><span>Communities</span></a></li> 
                     </ul>
                  </li>
                
                  <li>
                     <a href="javascript:;"><span class="menu-caret"><i class="material-icons">arrow_drop_down</i> </span><i class="material-icons">list</i> <span>Vaccines</span></a>
                     <ul class="sub-menu">
                          <li><a href="<?php echo e(route('bcg')); ?>"><i class="material-icons">keyboard_arrow_right</i><span>BCG</span></a></li>
                          <li><a href="<?php echo e(route('opv')); ?>"><i class="material-icons">keyboard_arrow_right</i><span>OPV</span></a></li>
                          <li><a href="<?php echo e(route('dtp')); ?>"><i class="material-icons">keyboard_arrow_right</i><span>DTP</span></a></li>
                          <li><a href="<?php echo e(route('pcv')); ?>"><i class="material-icons">keyboard_arrow_right</i><span>PVC</span></a></li>
                          <li><a href="<?php echo e(route('rota')); ?>"><i class="material-icons">keyboard_arrow_right</i><span>Rota</span></a></li>
                          <li><a href="<?php echo e(route('measles')); ?>"><i class="material-icons">keyboard_arrow_right</i><span>Measles</span></a></li>
                     </ul>
                  </li>
                 <?php endif; ?> 

                  <?php if(Auth::user()->roles == 'admin'): ?>
                    <li><a href="<?php echo e(route('communities')); ?>"><i class="material-icons">folder_shared</i><span>Community Register</span></a> </li>
                  <?php endif; ?>

                  <?php if(Auth::user()->roles == 'viewer-province'): ?>
                    <li><a href="<?php echo e(route('communities_province')); ?>"><i class="material-icons">folder_shared</i><span>Community Register</span></a> </li>
                  <?php endif; ?>

                  <?php if(Auth::user()->roles == 'viewer-district'): ?>
                    <li><a href="<?php echo e(route('communities_district')); ?>"><i class="material-icons">folder_shared</i><span>Community Register</span></a> </li>
                  <?php endif; ?>

                  <?php if(Auth::user()->roles == 'viewer-facility'): ?>
                    <li><a href="<?php echo e(route('communities_facility')); ?>"><i class="material-icons">folder_shared</i><span>Community Register</span></a> </li>
                  <?php endif; ?>

                  <?php if(Auth::user()->roles == 'viewer-zone'): ?>
                    <li><a href="<?php echo e(route('communities_zone')); ?>"><i class="material-icons">folder_shared</i><span>Community Register</span></a> </li>
                  <?php endif; ?>


                  <?php if(Auth::user()->roles == 'admin'): ?>
                    <li><a href="<?php echo e(route('metrics')); ?>"><i class="material-icons">people</i><span>Metrics</span></a></li> 
                  <?php endif; ?>

                  <?php if(Auth::user()->roles == 'viewer-province'): ?>
                    <li><a href="<?php echo e(route('metrics_province')); ?>"><i class="material-icons">people</i><span>Metrics</span></a></li> 
                  <?php endif; ?>

                 <?php if(Auth::user()->roles == 'viewer-district'): ?>
                    <li><a href="<?php echo e(route('metrics_district')); ?>"><i class="material-icons">people</i><span>Metrics</span></a></li> 
                  <?php endif; ?>

                  <?php if(Auth::user()->roles == 'viewer-facility'): ?>
                    <li><a href="<?php echo e(route('metrics_facility')); ?>"><i class="material-icons">people</i><span>Metrics</span></a></li> 
                  <?php endif; ?>

                  <?php if(Auth::user()->roles == 'viewer-zone'): ?>
                    <li><a href="<?php echo e(route('metrics_zone')); ?>"><i class="material-icons">people</i><span>Metrics</span></a></li> 
                  <?php endif; ?>
                  </ul>
                  <ul class="nav"> 
                  <li>
                     <hr>
                  </li>
                   <br><br><br><br>
              <li><a href="#" target="_blank"><i class="material-icons">launch</i> <span>Partners</span></a></li>
                    <li><a href="https://app.rapidpro.io/" target="_blank"><i class="material-icons">launch</i> <span>RapidPro</span></a></li>
                    <li><a href="https://zambia.casepro.io/users/login/?next=/" target="_blank"><i class="material-icons">launch</i> <span>Casepro</span></a></li> 
                </ul>
            </nav>
            <div class="brand"> 
                <a class="brand-logo">
                  
                 <img class="expanding-hidden" src="../resources/assets/images/Coat_of_arms_of_Zambia.png" style="height:60%;width:60%;"alt="">
             <p><small>Republic of Zambia<br>Ministry of Health</small></p> 
                    
                </a> 
            </div>
         </div><!--Sidebar-->
          <div class="main-panel">
            <!--Navbar-->
            <nav class="header navbar" >
          <div class="header-inner">
            <div class="navbar-item brand hidden-lg-up">  <a href="javascript:;" data-toggle="sidebar" class="toggle-offscreen"><i class="material-icons">menu</i> </a>   <a class="brand-logo hidden-xs-down"></a> </div>

        <a class="navbar-item navbar-heading navbar-spacer-right  hidden-lg-up" href="#">mVaccination</a>
             <a class="navbar-item navbar-spacer-right navbar-heading hidden-md-down" href="#"></a> 
              <?php if(auth()->guard()->guest()): ?>
                  <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                  <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                        <?php else: ?> 
                            <div class="navbar-item nav navbar-nav">  
                                <div class="nav-profile dropdown">
                                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                                      <div class="user-info expanding-hidden"><i class="material-icons">person</i><?php echo e(ucfirst(trans(Auth::user()->name))); ?></div>
                                    </a>
                                   <div class="dropdown-menu">  
                                     <?php if(Auth::user()->roles == 'admin'): ?>
                                       <a class="dropdown-item" href="<?php echo e(route('add')); ?>">Add user</a> 
                                          <a class="dropdown-item" href="">Users list</a>
                                         <a class="dropdown-item" target="_blank" href="">Import excel</a> 

                                     <?php endif; ?> 
                                      <div class="dropdown-divider"></div>  
                                       <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                   </div>
                                </div>
                            </div> 


                        <?php endif; ?>
            </div>
        </nav><!--Navbar-->
        <div class="main-content">
           <div class="content-view">
            <main class="main">
                  <?php echo $__env->yieldContent('content'); ?> 
              </main>
               
           </div> 
        </div><!--main-content-->
          </div><!--main-panel-->
</div><!--app--> 
<!-- Bootstrap and necessary plugins --> 
  
</body>