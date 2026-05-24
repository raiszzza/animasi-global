<?php $__env->startSection('title', 'Rekomendasi'); ?>

<?php $__env->startSection('content'); ?>
<div class="mb-4">
    <h2 class="section-title">⭐ Film Rekomendasi</h2>
    <p class="section-sub"><?php echo e($animations->count()); ?> film pilihan terbaik dari seluruh dunia</p>
</div>

<div class="row g-3">
    <?php $__currentLoopData = $animations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anim): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="movie-card">
            <img src="<?php echo e($anim->poster_url ?: 'https://placehold.co/300x400/111120/6b6b88?text=No+Poster'); ?>"
                 onerror="this.src='https://placehold.co/300x400/111120/6b6b88?text=No+Poster'" alt="<?php echo e($anim->title); ?>">
            <div class="card-body">
                <div class="d-flex gap-1 mb-2 flex-wrap">
                    <span class="badge-country"><?php echo e($anim->country->flag_emoji); ?> <?php echo e($anim->country->name); ?></span>
                    <span class="badge-rec">⭐ Picks</span>
                </div>
                <h6 class="card-title"><?php echo e($anim->title); ?></h6>
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="d-flex gap-1">
                        <span class="badge-year"><?php echo e($anim->year); ?></span>
                        <span class="badge-genre"><?php echo e($anim->genre); ?></span>
                    </div>
                    <span class="badge-rating">⭐ <?php echo e($anim->rating); ?></span>
                </div>
                <p class="synopsis-clamp mb-3"><?php echo e($anim->synopsis); ?></p>
                <a href="<?php echo e(route('animations.show', $anim->id)); ?>" class="btn btn-accent btn-sm w-100">Lihat Detail</a>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('animations.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Hp Victus\Downloads\animasi-global\resources\views/animations/recommended.blade.php ENDPATH**/ ?>