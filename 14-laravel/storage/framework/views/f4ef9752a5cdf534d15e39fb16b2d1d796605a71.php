<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
 
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
 
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    
    <!-- Styles -->
    <link href="<?php echo e(mix('css/app.css')); ?>" rel="stylesheet">

    <script>        
        function hideLan() { 
            let drop_lan = document.getElementById('drop_lan');
            drop_lan.classList.toggle('hidden'); 
        }
    </script>
</head>
<body class="bg-gray-200 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-red-900 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="<?php echo e(url('/')); ?>" class="text-lg font-semibold text-gray-100 no-underline">
                        <?php echo e(config('app.name', 'Laravel')); ?>

                    </a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base flex justify-center items-center">
                    

                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="relative inline-block text-left">
                        <div class="">
                            <button type="button" onclick="hideLan()" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-gray-100 text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                Language
                                <!-- Heroicon name: solid/chevron-down -->
                                <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <div id="drop_lan" class="hidden origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1" role="none">
                                <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->
                                <a href="<?php echo e(('locale/en')); ?>" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-200 transition-all" role="menuitem" tabindex="-1" id="menu-item-0"> <img src="" class="w-3"> English</a>
                                <a href="<?php echo e(('locale/es')); ?>" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-200 transition-all" role="menuitem" tabindex="-1" id="menu-item-1"> <img src="" class="w-3"> Español</a>                                
                            </div>
                        </div>
                    </div>

                    <?php if(auth()->guard()->guest()): ?>
                        <a class="no-underline hover:underline" href="<?php echo e(route('login')); ?>"><?php echo e(__('general.link-nav-login')); ?></a>
                        <?php if(Route::has('register')): ?>
                            <a class="no-underline hover:underline" href="<?php echo e(route('register')); ?>"><?php echo e(__('general.link-nav-register')); ?></a>
                        <?php endif; ?>
                    <?php else: ?>
                        <span><?php echo e(Auth::user()->name); ?></span>
 
                        <a href="<?php echo e(route('logout')); ?>"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><?php echo e(__('general.nav-logout')); ?></a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="hidden">
                            <?php echo e(csrf_field()); ?>

                        </form>
                    <?php endif; ?>
                </nav>
            </div>
        </header>
 
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</body>
</html><?php /**PATH C:\Users\felip\Desktop\Larapp\resources\views/layouts/app.blade.php ENDPATH**/ ?>