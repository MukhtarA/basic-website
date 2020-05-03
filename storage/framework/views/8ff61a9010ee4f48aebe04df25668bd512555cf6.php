<?php $__env->startSection('contact'); ?>
    <form method="post" action="<?php echo e(route('album-store')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="exampleInputEmail1"  placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="description">description</label>
            <input type="text" class="form-control" name="description"  placeholder="Enter description">
        </div>
        <div class="form-group">
            <label for="cover-image">cover-image</label>
            <input type="file" class="form-control" name="cover-image" id="cover-image"  >
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\basic-website\resources\views/albums/create.blade.php ENDPATH**/ ?>