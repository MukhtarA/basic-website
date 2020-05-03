<?php $__env->startSection('contact'); ?>

    <a href="/admin" class="btn btn-secondary mt-2 mb-2">Go Back</a>
    <h1> NAME: <?php echo e($user->name); ?></h1>

    <div class="badge bade-danger"><h1> EMAIL:<?php echo e($user->email); ?></h1></div>
    <hr>
    <h3>PASSWORD: <?php echo e($user->password); ?></h3>
    <form method="post" action="/admin/<?php echo e($user->id); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="btn btn-danger mt-2 float-right" >Delete </button>
    </form>
    <a href="/admin/<?php echo e($user->id); ?>/edit" class="btn btn-primary mt-2">Edit</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\basic-website\resources\views/view.blade.php ENDPATH**/ ?>