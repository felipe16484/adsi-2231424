

<?php $__env->startSection('content'); ?>
    <h1>Show User</h1>
    <a href="<?php echo e(url('users')); ?>"><-- User Module</a>
    <table>
        <tbody>
            <tr>
                <th>Fullname:</th>
                <td><?php echo e($user->fullname); ?></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><?php echo e($user->email); ?></td>
            </tr>
            <tr>
                <th>Phone:</th>
                <td><?php echo e($user->phone); ?></td>
            </tr>
            <tr>
                <th>Address:</th>
                <td><?php echo e($user->address); ?></td>
            </tr>
            <tr>
                <th>Role:</th>
                <td><?php echo e($user->role); ?></td>
            </tr>
            <tr>
                <th>Active:</th>
                <td><?php echo e($user->active); ?></td>
            </tr>
            <tr>
                <th>Created At:</th>
                <td><?php echo e($user->created_at); ?></td>
            </tr>
            
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\felip\Desktop\-\adsi-2231424\14-laravel\larapp\resources\views/users/show.blade.php ENDPATH**/ ?>