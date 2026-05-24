<?php $__env->startSection('title', $animation->title); ?>

<?php $__env->startSection('content'); ?>
<div class="mb-4">
    <a href="<?php echo e(url()->previous()); ?>" class="btn btn-ghost btn-sm"><i class="bi bi-arrow-left me-1"></i>Kembali</a>
</div>

<div class="row g-4">
    
    <div class="col-md-4 col-lg-3">
        <img src="<?php echo e($animation->poster_url ?: 'https://placehold.co/400x560/111120/6b6b88?text=No+Poster'); ?>"
             alt="<?php echo e($animation->title); ?>"
             onerror="this.src='https://placehold.co/400x560/111120/6b6b88?text=No+Poster'"
             class="w-100 rounded-3" style="object-fit:cover; max-height:480px; border:1px solid var(--border)">

        
        <div class="d-flex gap-2 mt-3">
            <a href="<?php echo e(route('animations.edit', $animation->id)); ?>" class="btn btn-teal btn-sm flex-fill"><i class="bi bi-pencil-fill me-1"></i>Edit</a>
            <form action="<?php echo e(route('animations.destroy', $animation->id)); ?>" method="POST" onsubmit="return confirm('Yakin hapus film ini?')">
                <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                <button class="btn btn-danger-soft btn-sm"><i class="bi bi-trash-fill me-1"></i>Hapus</button>
            </form>
        </div>
    </div>

    
    <div class="col-md-8 col-lg-9">
        <div class="d-flex flex-wrap gap-2 mb-3">
            <span class="badge-country"><?php echo e($animation->country->flag_emoji); ?> <?php echo e($animation->country->name); ?></span>
            <?php if($animation->is_recommended): ?><span class="badge-rec">⭐ Direkomendasikan</span><?php endif; ?>
        </div>

        <h1 style="font-family:'Syne',sans-serif; font-weight:800; font-size:2rem; line-height:1.15; margin-bottom:16px;"><?php echo e($animation->title); ?></h1>

        <div class="d-flex flex-wrap gap-2 mb-4">
            <span class="badge-rating fs-6">⭐ <?php echo e($animation->rating); ?> / 10</span>
            <span class="badge-year" style="font-size:0.85rem; padding:5px 12px"><?php echo e($animation->year); ?></span>
            <span class="badge-genre" style="font-size:0.85rem; padding:5px 12px"><?php echo e($animation->genre); ?></span>
        </div>

        <?php if($animation->box_office): ?>
        <div class="p-3 rounded-3 mb-4" style="background:var(--surface); border:1px solid var(--border); display:inline-flex; flex-direction:column;">
            <small class="text-muted" style="font-size:0.75rem; text-transform:uppercase; letter-spacing:0.06em">Box Office</small>
            <span style="color:var(--teal); font-family:'Syne',sans-serif; font-weight:800; font-size:1.6rem;">
                $<?php echo e(number_format($animation->box_office, 0, ',', '.')); ?>M
            </span>
        </div>
        <?php endif; ?>

        <div class="mb-4">
            <h5 style="color:var(--muted); font-size:0.75rem; text-transform:uppercase; letter-spacing:0.08em; margin-bottom:10px;">Sinopsis</h5>
            <p style="color:var(--text); line-height:1.75; font-size:1rem;"><?php echo e($animation->synopsis); ?></p>
        </div>

        <a href="<?php echo e(route('animations.byCountry', $animation->country->id)); ?>" class="btn btn-ghost btn-sm">
            <i class="bi bi-globe2 me-1"></i>Lihat semua animasi <?php echo e($animation->country->flag_emoji); ?> <?php echo e($animation->country->name); ?>

        </a>
    </div>
</div>


<?php if($related->count()): ?>
<hr style="border-color:var(--border); margin:40px 0 28px">
<h4 class="section-title mb-1">Film <?php echo e($animation->country->flag_emoji); ?> lainnya</h4>
<p class="section-sub mb-3">Dari <?php echo e($animation->country->name); ?></p>
<div class="row g-3">
    <?php $__currentLoopData = $related; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-sm-6 col-md-4 col-xl-3">
        <div class="movie-card">
            <img src="<?php echo e($r->poster_url ?: 'https://placehold.co/300x400/111120/6b6b88?text=No+Poster'); ?>"
                 onerror="this.src='https://placehold.co/300x400/111120/6b6b88?text=No+Poster'" alt="<?php echo e($r->title); ?>">
            <div class="card-body">
                <h6 class="card-title"><?php echo e($r->title); ?></h6>
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="badge-year"><?php echo e($r->year); ?></span>
                    <span class="badge-rating">⭐ <?php echo e($r->rating); ?></span>
                </div>
                <a href="<?php echo e(route('animations.show', $r->id)); ?>" class="btn btn-accent btn-sm w-100">Lihat Detail</a>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('animations.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Hp Victus\Downloads\animasi-global\resources\views/animations/show.blade.php ENDPATH**/ ?>