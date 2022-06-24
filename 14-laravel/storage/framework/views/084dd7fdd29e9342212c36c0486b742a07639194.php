 
<?php $__env->startSection('content'); ?>
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">
 
        <?php if(session('status')): ?>
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>
 
        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
 
            <header class="font-semibold flex gap-2 bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                </svg>
                Dashboard
            </header>
 
            <div class="w-full p-6 flex flex-col items-center gap-8 my-6 ">
 
                <div class="bg-white rounded-lg shadow-2xl lg:flex lg:max-w-lg">
                    <img src="<?php echo e(asset('images/mod-users.png')); ?>" class="w-1/1 lg:w-1/2 rounded-l-2xl">
                    <div class="p-6 flex gap-4 flex-col">
                        <h2 class="mb-2 text-2xl flex gap-2 items-center font-bold text-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                            </svg>
                            Users
                        </h2>
                        <p class="text-gray-600">Create and list users</p>
                        <a href="<?php echo e(url('users')); ?>" class="p-4 bg-blue-900 text-white text-center rounded-md md:w-28 w-full hover:bg-blue-800 hover:scale-105 transition-all duration-500">
                           Admin
                        </a>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-2xl lg:flex lg:max-w-lg">
                    <img src="<?php echo e(asset('images/mod-cats.png')); ?>" class="w-1/1 lg:w-1/2 rounded-l-2xl">
                    <div class="p-6 flex gap-4 flex-col">
                        <h2 class="mb-2 flex gap-2 items-center text-2xl font-bold text-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                                <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd" />
                            </svg>
                            Categories
                        </h2>
                        <p class="text-gray-600">Create and list categories</p>
                        <a href="<?php echo e(url('categories')); ?>" class="p-4 bg-blue-900 text-white text-center rounded-md md:w-28 w-full hover:bg-blue-800 hover:scale-105 transition-all duration-500">
                           Admin
                        </a>
                    </div>
                </div>
                
                <div class="bg-white rounded-lg shadow-2xl lg:flex lg:max-w-lg">
                    <img src="<?php echo e(asset('images/mod-games.png')); ?>" class="w-1/1 lg:w-1/2 rounded-l-2xl">
                    <div class="p-6 flex gap-4 flex-col">
                        <h2 class="mb-2 flex gap-2 items-center text-2xl font-bold text-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                            </svg>
                            Games
                        </h2>
                        <p class="text-gray-600">Create and list games</p>
                        <a href="<?php echo e(url('games')); ?>" class="p-4 bg-blue-900 text-white text-center rounded-md md:w-28 w-full hover:bg-blue-800 hover:scale-105 transition-all duration-500">
                           Admin
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\SENA\Desktop\larapp\resources\views/dashboard.blade.php ENDPATH**/ ?>