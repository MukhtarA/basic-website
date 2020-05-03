<?php $__env->startSection('content'); ?>
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row" >
            <div class="flex-none">
                <img src="<?php echo e('https://image.tmdb.org/t/p/w500/'. $movie['poster_path']); ?>" alt="" class="w-64 g:w-96">
            </div>
            <div class="md:ml-24">
                <h2 class="text-4xl mt-4 md:mt-0 font-semibold"><?php echo e($movie['title']); ?></h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <span class="ml-1"><?php echo e($movie['vote_average'] * 10 . '%'); ?></span>
                    <span class="mx-2">|</span>
                    <span ><?php echo e(\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')); ?></span>
                    <span>|</span>
                    <span> <?php $__currentLoopData = $movie['genres']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($genre['name']); ?><?php if(!$loop->last): ?>, <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></span>
                </div>
                <p class="text-gray-300 mt-8">
            <?php echo e($movie['overview']); ?>

                </p>
        <div class="mt-12">
            <h4 class="text-white font-semibold"> Featured Crew</h4>
            <div class="flex mt-4">
                <?php $__currentLoopData = $movie['credits']['crew']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crew): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($loop->index < 2): ?>
                         <div class="mr-8">
                             <div><?php echo e($crew['name']); ?></div>
                                 <div class="text-sm text-gray-400"><?php echo e($crew['job']); ?></div>
                         </div>
                             <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
                <?php if(count($movie['videos']['results']) > 0): ?>
                <div class="mt-12">
                    <a href="https://youtube.com/watch?v=<?php echo e($movie['videos']['results'][0]['key']); ?>" class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold
                       px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150" >
                         <span class="ml-2">Play Trailer</span>
                    </a>
                </div>
                 <?php endif; ?>


            </div>

        </div>

    </div>

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                <?php $__currentLoopData = $movie['credits']['cast']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cast): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($loop->index < 5): ?>
        <div class="mt-8">
            <a href="#">
                <img src="<?php echo e('https://image.tmdb.org/t/p/w300/'.$cast['profile_path']); ?>" alt="actor1" class="hover:opacity-75 transition ease-in-out duration-150" >
            </a>
            <div class="mt-2">
                <a href="#" class="text-lg mt-2 hover:text-gray:300"><?php echo e($cast['name']); ?></a>
                <div class="text-sm text-gray-400"><?php echo e($cast['character']); ?></div>
            </div>
        </div>

            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
         </div>
        </div>

         <div class="movie-images">
             <div class="container mx-auto px-4 py-16">
                 <h2 class="text-4xl font-semibold">Images</h2>
                 <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  gap-8">
                         <?php $__currentLoopData = $movie['images']['backdrops']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <?php if($loop->index < 9): ?>
                                     <div class="mt-8">
                                         <a href="">
                                             <img src="<?php echo e('https://image.tmdb.org/t/p/w500/'.$image['file_path']); ?>" alt="actor1" class="hover:opacity-75 transition ease-in-out duration-150" >

                                         </a>
                                     </div>
                              <?php endif; ?>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                 </div>
             </div>
         </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\basic-website\resources\views/show.blade.php ENDPATH**/ ?>