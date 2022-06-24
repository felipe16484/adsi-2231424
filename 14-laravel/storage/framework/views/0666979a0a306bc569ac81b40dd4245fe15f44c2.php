

<?php $__env->startSection('content'); ?>
    <h1 class="text-center font-bold text-2xl mb-5 py-3 text-white bg-[#a43636]">Show Game</h1>
    <div class="flex justify-center mb-5">
        <a class="text-center text-red-700 font-bold border-2 border-[#943a19] py-2 px-5 rounded-lg hover:scale-105 transition-all" href="<?php echo e(url('games')); ?>">Game Module</a>
    </div>
    <table class="mx-auto rounded-xl overflow-hidden">
        <tbody>
            <tr class="bg-orange-900 text-white">
                <th class="py-4 text-xl px-10 text-right">Name:</th>
                <td class="py-4 text-xl px-10 text-gray-200"><?php echo e($game->name); ?></td>
            </tr>
            <tr class="bg-orange-800 text-white">
                <th class="py-4 text-xl px-10 text-right">Imagen:</th>
                <td class="py-4 text-xl px-10 text-gray-200"><?php echo e($game->imagen); ?></td>
            </tr>
            <tr class="bg-orange-900 text-white">
                <th class="py-4 text-xl px-10 text-right">Description:</th>
                <td class="py-4 text-xl px-10 text-gray-200"><?php echo e($game->description); ?></td>
            </tr>
            <tr class="bg-orange-800 text-white">
                <th class="py-4 text-xl px-10 text-right">Price:</th>
                <td class="py-4 text-xl px-10 text-gray-200"><?php echo e($game->price); ?></td>
            </tr>           
            
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\felip\Desktop\Larapp\resources\views/games/show.blade.php ENDPATH**/ ?>