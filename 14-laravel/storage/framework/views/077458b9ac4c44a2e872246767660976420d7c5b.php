

<?php $__env->startSection('content'); ?>

    <h1 class="text-center font-bold text-2xl mb-5 py-3 text-white bg-[#a43636]">Edit Category</h1>
    <div class="flex justify-center mb-5">
        <a class="text-center text-red-700 font-bold border-2 border-[#943a19] py-2 px-5 rounded-lg hover:scale-105 transition-all" href="<?php echo e(url('categories')); ?>">User Module</a>
    </div>
    
    <section class="mb-10 w-[600px] mx-auto border-4 border-orange-900 rounded-2xl p-0 overflow-hidden bg-[#943a19]">
            
        <header class="w-12/12 m-0 font-semibold bg-orange-900 text-white py-5 px-6 text-center">
            <?php echo e(__('Edit Category')); ?>

        </header>

        <form class="p-8 pb-5" method="POST" action="<?php echo e(url('categories/'.$category->id)); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>

            <!-- Name -->
            <div>
                <label class="text-white" for="name"><?php echo e(__('Name')); ?></label>
                <input id="name" class="block mt-1 w-full rounded-md border-gray-400" type="text" name="name" value="<?php echo e(old('name', $category->name)); ?>" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <label class="text-white" for="image"><?php echo e(__('Image')); ?></label>
                <input id="image" class="block mt-1 w-full rounded-md border-gray-400" type="text" name="image" value="<?php echo e(old('image', $category->image)); ?>" required />
            </div>

            <!-- Phone -->
            <div class="mt-4">
                <label class="text-white" for="description"><?php echo e(__('Description')); ?></label>
                <input id="description" class="block mt-1 w-full rounded-md border-gray-400" type="text" name="description" value="<?php echo e(old('description', $category->description)); ?>" required />
            </div>
            

            <!-- Edit Button -->
            <div class="flex justify-center mt-5">
                <button class="bg-orange-900 text-white text-center py-4 px-10 rounded-lg hover:bg-[#c54b22] transition-all"><?php echo e(__('Edit')); ?></button>
            </div> 

        </form>
    </section>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\felip\Desktop\Larapp\resources\views/categories/edit.blade.php ENDPATH**/ ?>