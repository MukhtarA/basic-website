<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top" >
    <div class="container-fluid" id="navbarSupportedContent">
    <a class="navbar-brand" href="../home"><img src="/storage/album_covers/v.png"> HD MOVIES</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="#navbarResponsive">





            <?php
if (! isset($_instance)) {
    $dom = \Livewire\Livewire::mount('search-dropdown', [])->dom;
} elseif ($_instance->childHasBeenRendered('cSzCgkN')) {
    $componentId = $_instance->getRenderedChildComponentId('cSzCgkN');
    $componentTag = $_instance->getRenderedChildComponentTagName('cSzCgkN');
    $dom = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('cSzCgkN');
} else {
    $response = \Livewire\Livewire::mount('search-dropdown', []);
    $dom = $response->dom;
    $_instance->logRenderedChild('cSzCgkN', $response->id, \Livewire\Livewire::getRootElementTagName($dom));
}
echo $dom;
?>
        <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto  ">
            <!-- Authentication Links -->
            <?php if(auth()->guard()->guest()): ?>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                </li>
                <?php if(Route::has('register')): ?>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                    </li>
                <?php endif; ?>
            <?php else: ?>

                    <li class="nav-item " >
                        <a href="<?php echo e(route('home')); ?>" class="nav-link <?php echo e(Request::route()->getName() === 'home' ? 'active' : ''); ?>">Home</a>
                    </li>


                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <?php echo e(__('Logout')); ?>

                        </a>

                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </li>
            <?php endif; ?>
        </ul>
    </div>

</nav>
<?php /**PATH C:\xampp\htdocs\basic-website\resources\views/inc/nav.blade.php ENDPATH**/ ?>