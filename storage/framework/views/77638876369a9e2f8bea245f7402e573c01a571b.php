<?php $__env->startSection('contact'); ?>
    <form method="post" action="<?php echo e(route('contact-form-submit')); ?>">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name"  name="name" placeholder="Enter name" >
        </div>

        <div class="form-group">
            <label for="email">Email address</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">

        </div>

        <div class="form-group">
            <label class="subject" >subject</label>
            <input type="text" class="form-control" id="subject" name="subject"  placeholder="Enter subject">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <input type="text" class="form-control" id="message" name="message" placeholder="Enter message">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\basic-website\resources\views/contact.blade.php ENDPATH**/ ?>