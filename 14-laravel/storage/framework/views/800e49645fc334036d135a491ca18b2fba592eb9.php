 
<?php $__env->startSection('content'); ?>
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">
 
        <?php if(session('status')): ?>
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>
 
        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">
 
            <header class="font-semibold bg-red-800 text-white text-center py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                Dashboard
            </header>
 
            <div class="p-6 flex justify-center gap-10">
                <a href="<?php echo e(url('users')); ?>" class="p-4 bg-red-900 text-white rounded-lg hover:scale-105 transition">
                    Users Module
                </a>
                <a href="<?php echo e(url('categories')); ?>" class="p-4 bg-red-900 text-white rounded-lg hover:scale-105 transition">
                    Category Module
                </a>
                <a href="<?php echo e(url('games')); ?>" class="p-4 bg-red-900 text-white rounded-lg hover:scale-105 transition">
                    Games Module
                </a>
                
            </div>
            <p class="text-gray-700 my-8 mt-0 text-center">
                You are logged in!
            </p>
        </section>
    </div>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\felip\Desktop\Larapp\resources\views/dashboard.blade.php ENDPATH**/ ?>