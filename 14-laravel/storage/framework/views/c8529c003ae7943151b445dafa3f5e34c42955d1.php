

<?php $__env->startSection('content'); ?>

    <h1 class="text-center font-bold text-2xl mb-5 py-3 text-white bg-[#a43636]">Create User</h1>
    <div class="flex justify-center mb-5">
        <a class="text-center text-red-700 font-bold border-2 border-[#943a19] py-2 px-5 rounded-lg hover:scale-105 transition-all" href="<?php echo e(url('users')); ?>">User Module</a>
    </div>
    
    <section class="mb-10 w-[600px] mx-auto border-4 border-orange-900 rounded-2xl p-0 overflow-hidden bg-[#943a19]">
            
        <header class="w-12/12 m-0 font-semibold bg-orange-900 text-white py-5 px-6 text-center">
            <?php echo e(__('Add User')); ?>

        </header>

        <form class="p-8 pb-5" method="POST" action="<?php echo e(url('users')); ?>">
            <?php echo csrf_field(); ?>
            
            <!-- Name -->
            <div>
                <label class="text-white" for="fullname"><?php echo e(__('general.fullname')); ?></label>
                <input id="fullname" class="block mt-1 w-full rounded-md border-gray-400" type="text" name="fullname" value="<?php echo e(old('fullname')); ?>" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <label class="text-white" for="email"><?php echo e(__('general.email')); ?></label>
                <input id="email" class="block mt-1 w-full rounded-md border-gray-400" type="email" name="email" value="<?php echo e(old('email')); ?>" required />
            </div>

            <!-- Phone -->
            <div class="mt-4">
                <label class="text-white" for="phone"><?php echo e(__('general.phone')); ?></label>
                <input id="phone" class="block mt-1 w-full rounded-md border-gray-400" type="number" name="phone" value="<?php echo e(old('phone')); ?>" required />
            </div>

            <!-- Date -->
            <div class="mt-4">
                <label class="text-white" for="date"><?php echo e(__('general.birthdate')); ?></label>
                <input id="date" class="block mt-1 w-full rounded-md border-gray-400 cursor-pointer" type="date" name="birthday" value="<?php echo e(old('date')); ?>" required />
            </div>

            <!-- Gender -->
            <div class="mt-4">
                <label class="text-white" for="gender"><?php echo e(__('general.gender')); ?></label>
                <select name="gender" id="gender" class="block mt-1 w-full rounded-md border-gray-400 cursor-pointer">
                    <option value="" <?php if(!old('gender')): ?> selected <?php endif; ?> disabled>---</option>
                    <option value="Male" <?php if(old('gender') == 'Male'): ?> selected <?php endif; ?>>Male</option>
                    <option value="Female" <?php if(old('gender') == 'Female'): ?> selected <?php endif; ?>>Female</option>
                </select>
            </div>
            
            <!-- Address -->
            <div class="mt-4">
                <label class="text-white" for="address"><?php echo e(__('general.address')); ?></label>
                <input id="address" class="block mt-1 w-full rounded-md border-gray-400" type="text" name="address" value="<?php echo e(old('address')); ?>" required />
            </div>

            <!-- Role -->
            <div class="mt-4">
                <label class="text-white" for="role"><?php echo e(__('general.role')); ?></label>
                <select name="role" id="role" class="block mt-1 w-full rounded-md border-gray-400 cursor-pointer">
                    <option value="" <?php if(!old('role')): ?> selected <?php endif; ?> disabled>---</option>
                    <option value="Admin" <?php if(old('role') == 'Admin'): ?> selected <?php endif; ?>>Admin</option>
                    <option value="Customer" <?php if(old('role') == 'Customer'): ?> selected <?php endif; ?>>Customer</option>
                </select>
                <?php $__errorArgs = ['role'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs italic mt-4">
                        <?php echo e($message); ?>

                    </p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Button Add -->  
            <div class="flex justify-center mt-5">
                <button class="bg-orange-900 text-white text-center py-4 px-10 rounded-lg hover:bg-[#c54b22] transition-all"><?php echo e(__('Add')); ?></button>
            </div>          
        </form>
    
    </section>
    <div class="text-center font-bold text-2xl mb-5 py-7 text-white bg-red-900"></div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\felip\Desktop\Larapp\resources\views/users/create.blade.php ENDPATH**/ ?>