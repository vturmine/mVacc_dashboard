<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>mVaccination</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                       <?php if(Auth::user()->roles == 'admin'): ?>
                         <a href="<?php echo e(url('/home')); ?>">Home</a>
                       <?php elseif(Auth::user()->roles == 'viewer-province'): ?>
                         <a href="<?php echo e(url('/province')); ?>">Home</a>
                       <?php elseif(Auth::user()->roles == 'viewer-district'): ?>
                         <a href="<?php echo e(url('/district')); ?>">Home</a>
                       <?php elseif(Auth::user()->roles == 'viewer-facility'): ?>
                         <a href="<?php echo e(url('/facility')); ?>">Home</a>
                       <?php elseif(Auth::user()->roles == 'viewer-zone'): ?>
                         <a href="<?php echo e(url('/zone')); ?>">Home</a>
                       <?php else: ?>
                         <a href="">Home</a>
                       <?php endif; ?>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a> 
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                    mVaccination
                </div>

                <div class="links">
                    <a href="https://app.rapidpro.io/" target="_blank">RapidPro</a>
                    <a href="https://zambia.casepro.io/users/login/?next=/" target="_blank">Casepro</a>
                    <a href="" class="brand-logo">Ministry of Health </a>  
                </div>
            </div>
        </div>
    </body>
</html>
