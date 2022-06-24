

<?php $__env->startSection('content'); ?>
    <h1 class="text-center my-10 font-bold text-2xl flex items-center justify-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
        </svg>
        Show User
    </h1>
    <hr>
    <nav class="flex items-center justify-center py-4" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
            <a href="<?php echo e(url('home')); ?>" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                Dashboard
            </a>
            </li>
            <li>
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <a href="<?php echo e(url('users')); ?>" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Users Module</a>
            </div>
            </li>
            <li>
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Shoe User</a>
            </div>
            </li>
        </ol>
    </nav>

    <table class="w-10/12 text-sm text-left text-gray-500 mx-auto">
        <tbody>
            <tr class="bg-white border-b hover:bg-gray-50">
                <td colspan="2" class="px-6 py-6">
                    <div class="flex flex-wrap items-center justify-center bordered border-[#d2d6dc] border-2 p-2 rounded-lg">
                        <img id="preview" class="rounded-lg" src="<?php echo e(asset($user->photo)); ?>" width="200px">
                    </div>
                </td>
            </tr>
            <tr class="border-b hover:bg-gray-50">
                <th class="px-6 py-6">Fullname:</th>
                <td class="px-6 py-6"><?php echo e($user->fullname); ?></td>
            </tr>
            <tr class="bg-white border-b hover:bg-gray-50">
                <th class="px-6 py-6">Email:</th>
                <td class="px-6 py-6"><?php echo e($user->email); ?></td>
            </tr>
            <tr class="border-b hover:bg-gray-50">
                <th class="px-6 py-6">Phone:</th>
                <td class="px-6 py-6"><?php echo e($user->phone); ?></td>
            </tr>
            <tr class="bg-white border-b hover:bg-gray-50">
                <th class="px-6 py-6">Address:</th>
                <td class="px-6 py-6"><?php echo e($user->address); ?></td>
            </tr>
            <tr class="border-b hover:bg-gray-50">
                <th class="px-6 py-6">Role:</th>
                <td class="px-6 py-6"><?php echo e($user->role); ?></td>
            </tr>
            <tr class="bg-white border-b hover:bg-gray-50">
                <th class="px-6 py-6">Active:</th>
                <td class="px-6 py-6">
                    <?php if($user->active == 1): ?>
                        <button class="bg-green-600 p-2 rounded-md text-white w-8 h-8">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    <?php else: ?>
                        <button class="bg-red-800 p-2 rounded-md text-white w-8 h-8">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    <?php endif; ?>
                </td>
            </tr>
            <tr class="border-b hover:bg-gray-50">
                <th class="px-6 py-6">Created At:</th>
                <td class="px-6 py-6"><?php echo e($user->created_at); ?></td>
            </tr>
        </tbody>
    </table>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Maria Gamer\Desktop\larapp\resources\views/users/show.blade.php ENDPATH**/ ?>