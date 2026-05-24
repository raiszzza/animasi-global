<?php $__env->startSection('title', 'Beranda'); ?>

<?php $__env->startSection('content'); ?>

<div class="mb-4">
    <h1 class="section-title">🌍 Animasi Global</h1>
    <p class="section-sub">Jelajahi film animasi terbaik dari berbagai penjuru dunia</p>
</div>


<div class="row g-3 mb-4">
    <div class="col-6 col-md-3">
        <div class="stat-card">
            <div class="stat-number"><?php echo e($animations->count()); ?></div>
            <div class="stat-label"><i class="bi bi-film me-1"></i>Total Film</div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="stat-card">
            <div class="stat-number"><?php echo e($countries->count()); ?></div>
            <div class="stat-label"><i class="bi bi-globe2 me-1"></i>Negara</div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="stat-card">
            <div class="stat-number" style="color:var(--gold)"><?php echo e($animations->where('is_recommended', true)->count()); ?></div>
            <div class="stat-label"><i class="bi bi-star-fill me-1"></i>Direkomendasikan</div>
        </div>
    </div>
    <div class="col-6 col-md-3">
        <div class="stat-card">
            <div class="stat-number" style="color:var(--teal)"><?php echo e(number_format($animations->avg('rating'), 1)); ?></div>
            <div class="stat-label"><i class="bi bi-bar-chart-fill me-1"></i>Rata-rata Rating</div>
        </div>
    </div>
</div>


<div class="mb-4">
    <div class="d-flex align-items-center justify-content-between mb-3">
        <span class="fw-600" style="font-weight:600; font-size:0.9rem; color:var(--muted)">FILTER NEGARA</span>
        <a href="<?php echo e(route('animations.create')); ?>" class="btn btn-accent btn-sm"><i class="bi bi-plus-lg me-1"></i>Tambah Film</a>
    </div>
    <div class="d-flex flex-wrap gap-2">
        <a href="<?php echo e(route('animations.index')); ?>" class="filter-btn active">Semua</a>
        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('animations.byCountry', $c->id)); ?>" class="filter-btn"><?php echo e($c->flag_emoji); ?> <?php echo e($c->name); ?></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>


<div class="row g-3">
    <?php $__currentLoopData = $animations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anim): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="movie-card">
            <img src="<?php echo e($anim->poster_url ?: 'https://placehold.co/300x400/111120/ffffff?text='.urlencode($anim->title)); ?>"
                 alt="<?php echo e($anim->title); ?>"
                 onerror="this.src='https://placehold.co/300x400/111120/6b6b88?text=No+Poster'">
            <div class="card-body">
                <div class="d-flex gap-1 mb-2 flex-wrap">
                    <span class="badge-country"><?php echo e($anim->country->flag_emoji); ?> <?php echo e($anim->country->name); ?></span>
                    <?php if($anim->is_recommended): ?><span class="badge-rec">⭐ Picks</span><?php endif; ?>
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
                <div class="d-flex gap-2">
                    <a href="<?php echo e(route('animations.show', $anim->id)); ?>" class="btn btn-accent btn-sm flex-fill">Detail</a>
                    <a href="<?php echo e(route('animations.edit', $anim->id)); ?>" class="btn btn-ghost btn-sm"><i class="bi bi-pencil"></i></a>
                    <form action="<?php echo e(route('animations.destroy', $anim->id)); ?>" method="POST" onsubmit="return confirm('Hapus film ini?')">
                        <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger-soft btn-sm"><i class="bi bi-trash"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('animations.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Hp Victus\Downloads\animasi-global\resources\views/animations/index.blade.php ENDPATH**/ ?>