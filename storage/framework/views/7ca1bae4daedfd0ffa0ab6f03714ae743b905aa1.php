<?php $__env->startSection('contact'); ?>
    <h1>Edit USER</h1>
    <form method="POST" action="/admin/<?php echo e($user->id); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="name">name</label>
            <input type="text" class="form-control"  name="name" id="name"  placeholder="Enter name" value="<?php echo e($user->name); ?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email"  name="email" placeholder="Enter email" value="<?php echo e($user->email); ?>">
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="text" class="form-control" id="password" name="password" placeholder="Enter password" value="<?php echo e($user->password); ?>">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\basic-website\resources\views/edit.blade.php ENDPATH**/ ?>