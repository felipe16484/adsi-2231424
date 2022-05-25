 
<?php $__env->startSection('content'); ?>
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">
 
        <?php if(session('status')): ?>
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>
 
        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
 
            <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Dashboard
            </header>
 
            <div class="w-full p-6">
                <a href="<?php echo e(url('users')); ?>" class="p-4 bg-blue-900 text-white">
                    Users Module
                </a>
                
                <p class="text-gray-700 my-8">
                    You are logged in!
                </p>
            </div>
        </section>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\felip\Desktop\-\adsi-2231424\14-laravel\larapp\resources\views/dashboard.blade.php ENDPATH**/ ?>