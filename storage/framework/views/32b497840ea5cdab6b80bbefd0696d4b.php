<?php $__env->startSection('title', $country->name); ?>

<?php $__env->startSection('content'); ?>
<div class="mb-4">
    <a href="<?php echo e(route('animations.index')); ?>" class="btn btn-ghost btn-sm"><i class="bi bi-arrow-left me-1"></i>Kembali</a>
</div>

<div class="mb-4">
    <div class="d-flex align-items-center gap-3 mb-2">
        <span style="font-size:3rem; line-height:1"><?php echo e($country->flag_emoji); ?></span>
        <div>
            <h2 class="section-title mb-0"><?php echo e($country->name); ?></h2>
            <p class="section-sub mb-0"><?php echo e($country->animations->count()); ?> film ditemukan</p>
        </div>
    </div>
</div>


<div class="d-flex flex-wrap gap-2 mb-4">
    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('animations.byCountry', $c->id)); ?>"
           class="filter-btn <?php echo e($c->id == $country->id ? 'active':''); ?>">
            <?php echo e($c->flag_emoji); ?> <?php echo e($c->name); ?>

        </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<div class="row g-3">
    <?php $__empty_1 = true; $__currentLoopData = $country->animations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anim): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="movie-card">
            <img src="<?php echo e($anim->poster_url ?: 'https://placehold.co/300x400/111120/6b6b88?text=No+Poster'); ?>"
                 onerror="this.src='https://placehold.co/300x400/111120/6b6b88?text=No+Poster'" alt="<?php echo e($anim->title); ?>">
            <div class="card-body">
                <?php if($anim->is_recommended): ?><span class="badge-rec mb-2 d-inline-block">⭐ Picks</span><?php endif; ?>
                <h6 class="card-title"><?php echo e($anim->title); ?></h6>
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <div class="d-flex gap-1">
                        <span class="badge-year"><?php echo e($anim->year); ?></span>
                        <span class="badge-genre"><?php echo e($anim->genre); ?></span>
                    </div>
                    <span class="badge-rating">⭐ <?php echo e($anim->rating); ?></span>
                </div>
                <p class="synopsis-clamp mb-3"><?php echo e($anim->synopsis); ?></p>
                <div class="d-flex gap-2">
                    <a href="<?php echo e(route('animations.show', $anim->id)); ?>" class="btn btn-accent btn-sm flex-fill">Detail</a>
                    <a href="<?php echo e(route('animations.edit', $anim->id)); ?>" class="btn btn-ghost btn-sm"><i class="bi bi-pencil"></i></a>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <div class="col-12 text-center py-5" style="color:var(--muted)">Belum ada film dari <?php echo e($country->name); ?></div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('animations.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Hp Victus\Downloads\animasi-global\resources\views/animations/by_country.blade.php ENDPATH**/ ?>