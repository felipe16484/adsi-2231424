

<?php $__env->startSection('content'); ?>

    <h1 class="text-center font-bold text-2xl mb-5 py-3 text-white bg-[#a43636]">Create User</h1>
    <div class="flex justify-center mb-5">
        <a class="text-center text-red-700 font-bold border-2 border-[#943a19] py-2 px-5 rounded-lg hover:scale-105 transition-all" href="<?php echo e(url('games')); ?>">Game Module</a>
    </div>
    
    <section class="mb-10 w-[600px] mx-auto border-4 border-orange-900 rounded-2xl p-0 overflow-hidden bg-[#943a19]">
            
        <header class="w-12/12 m-0 font-semibold bg-orange-900 text-white py-5 px-6 text-center">
            <?php echo e(__('Add Game')); ?>

        </header>

        <form class="p-8 pb-5" method="POST" action="<?php echo e(url('games')); ?>">
            <?php echo csrf_field(); ?>
            
            <!-- Name -->
            <div>
                <label class="text-white" for="name"><?php echo e(__('Name')); ?></label>
                <input id="name" class="block mt-1 w-full rounded-md border-gray-400" type="text" name="name" value="<?php echo e(old('name')); ?>" required autofocus />
            </div>

            <!-- Imagen -->
            <div class="mt-4">
                <label class="text-white" for="imagen"><?php echo e(__('Imagen')); ?></label>
                <input id="imagen" class="block mt-1 w-full rounded-md border-gray-400" type="text" name="imagen" value="<?php echo e(old('imagen')); ?>" required />
            </div>

            <!-- Description -->
            <div class="mt-4">
                <label class="text-white" for="description"><?php echo e(__('Description')); ?></label>
                <input id="description" class="block mt-1 w-full rounded-md border-gray-400" type="text" name="description" value="<?php echo e(old('description')); ?>" required />
            </div>

            <!-- User ID -->
            <div class="mt-4">
                <label class="text-white" for="user_id"><?php echo e(__('User ID')); ?></label>
                <input id="user_id" class="block mt-1 w-full rounded-md border-gray-400" type="number" name="user_id" value="<?php echo e(old('user_id')); ?>" required />
            </div>

            <!-- Category ID -->
            <div class="mt-4">
                <label class="text-white" for="category_id"><?php echo e(__('Category ID')); ?></label>
                <input id="category_id" class="block mt-1 w-full rounded-md border-gray-400" type="number" name="category_id" value="<?php echo e(old('category_id')); ?>" required />
            </div>

            <!-- Slider -->
            <div class="mt-4">
                <label class="text-white" for="slider"><?php echo e(__('Slider')); ?></label>
                <select name="slider" id="slider" class="block mt-1 w-full rounded-md border-gray-400 cursor-pointer">
                    <option value="" <?php if(!old('slider')): ?> selected <?php endif; ?> disabled>---</option>
                    <option value="1" <?php if(old('slider') == '1'): ?> selected <?php endif; ?>>1</option>
                    <option value="0" <?php if(old('slider') == '0'): ?> selected <?php endif; ?>>0</option>
                </select>
            </div>
            
            <!-- Price -->
            <div class="mt-4">
                <label class="text-white" for="price"><?php echo e(__('Price')); ?></label>
                <input id="price" class="block mt-1 w-full rounded-md border-gray-400" type="number" name="price" value="<?php echo e(old('price')); ?>" required />
            </div>

            
            <!-- Button Add -->  
            <div class="flex justify-center mt-5">
                <button class="bg-orange-900 text-white text-center py-4 px-10 rounded-lg hover:bg-[#c54b22] transition-all"><?php echo e(__('Add')); ?></button>
            </div>          
        </form>
    
    </section>
    <div class="text-center font-bold text-2xl mb-5 py-7 text-white bg-red-900"></div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\felip\Desktop\Larapp\resources\views/games/create.blade.php ENDPATH**/ ?>