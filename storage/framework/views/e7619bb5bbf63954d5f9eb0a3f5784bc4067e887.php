<?php $__env->startSection('contact'); ?>
    <h1>ADMIN </h1>

    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card m-2">
            <h2 class=""><a href="/admin/<?php echo e($user->id); ?>"><?php echo e($user->name); ?></a></h2>
            <h3><?php echo e($user->email); ?></h3>
            <span class="badge badge-danger"><?php echo e($user->password); ?></span>

        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\basic-website\resources\views/admin.blade.php ENDPATH**/ ?>