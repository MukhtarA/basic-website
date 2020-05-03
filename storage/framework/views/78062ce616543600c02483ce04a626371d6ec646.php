<div class="mt-8">
    <a href="<?php echo e(route('movies.show', $movie['id'])); ?>">
        <img src="<?php echo e('https://image.tmdb.org/t/p/w500/' . $movie['poster_path']); ?>" alt="poster" class="hover:opacity-75 transition ease-in-out duration-150">
    </a>
    <div class="mt-2">
        <a href="<?php echo e(route('movies.show', $movie['id'])); ?>" class="text-lg mt-2 hover:text-gray-300"><?php echo e($movie['title']); ?></a>
        <div class="flex items-center text-gray-400 text-sm mt-1">
            <span>star</span>
            <span class="ml-1"><?php echo e($movie['vote_average'] * 10 . '%'); ?></span>
            <span class="mx-2">|</span>
            <span><?php echo e(\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')); ?> </span>
        </div>
        <div class="text-gray-400 text-sm">
            <?php $__currentLoopData = $movie['genre_ids']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($genres->get($genre)); ?><?php if(!$loop->last): ?>, <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\basic-website\resources\views/components/movie-card.blade.php ENDPATH**/ ?>