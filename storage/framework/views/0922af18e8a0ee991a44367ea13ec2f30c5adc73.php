<?php $__env->startSection('content'); ?>
    <div class="container">
    <?php if(count($albums) > 0 ): ?>
        <div class="row">
            <?php $__currentLoopData = $albums; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img src="/storage/album_covers/<?php echo e($album->cover_image); ?>" alt="<?php echo e($album->cover_image); ?>" height="200px">
                    <div class="card-body">
                        <p class="card-text"><?php echo e($album->description); ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                            </div>
                            <small class="text-muted"><?php echo e($album->name); ?></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
    <h3>No albums</h3>
    <?php endif; ?>
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\basic-website\resources\views/albums/index.blade.php ENDPATH**/ ?>