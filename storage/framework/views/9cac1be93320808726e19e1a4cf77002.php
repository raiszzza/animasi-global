<?php $__env->startSection('title', 'Kelola Negara'); ?>

<?php $__env->startSection('content'); ?>
<div class="mb-4">
    <h2 class="section-title">🌍 Kelola Negara</h2>
    <p class="section-sub">Manajemen data negara asal film animasi</p>
</div>

<div class="row g-4">
    
    <div class="col-lg-4">
        <div style="background:var(--card); border:1px solid var(--border); border-radius:var(--radius); padding:24px; position:sticky; top:80px;">
            <h5 style="font-family:'Syne',sans-serif; font-weight:700; margin-bottom:20px;">➕ Tambah Negara</h5>
            <form action="<?php echo e(route('countries.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label class="form-label">Nama Negara</label>
                    <input type="text" name="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           value="<?php echo e(old('name')); ?>" placeholder="Contoh: Indonesia">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-4">
                    <label class="form-label">Flag Emoji</label>
                    <input type="text" name="flag_emoji" class="form-control <?php $__errorArgs = ['flag_emoji'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           value="<?php echo e(old('flag_emoji')); ?>" placeholder="Contoh: 🇮🇩" maxlength="10">
                    <?php $__errorArgs = ['flag_emoji'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><div class="invalid-feedback"><?php echo e($message); ?></div><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <small style="color:var(--muted); font-size:0.78rem;">Copy emoji bendera dari keyboard atau internet</small>
                </div>
                <button type="submit" class="btn btn-accent w-100"><i class="bi bi-plus-circle-fill me-2"></i>Tambah Negara</button>
            </form>
        </div>
    </div>

    
    <div class="col-lg-8">
        <table class="table table-dark-custom w-100">
            <thead>
                <tr>
                    <th>Flag</th>
                    <th>Nama Negara</th>
                    <th>Jumlah Film</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td style="font-size:1.5rem"><?php echo e($c->flag_emoji); ?></td>
                    <td>
                        <a href="<?php echo e(route('animations.byCountry', $c->id)); ?>" style="color:var(--text); text-decoration:none; font-weight:600;">
                            <?php echo e($c->name); ?>

                        </a>
                    </td>
                    <td>
                        <span class="badge-genre" style="font-size:0.8rem; padding:4px 10px;"><?php echo e($c->animations_count); ?> film</span>
                    </td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="<?php echo e(route('animations.byCountry', $c->id)); ?>" class="btn btn-ghost btn-sm"><i class="bi bi-eye"></i></a>
                            <?php if($c->animations_count == 0): ?>
                            <form action="<?php echo e(route('countries.destroy', $c->id)); ?>" method="POST"
                                  onsubmit="return confirm('Hapus <?php echo e($c->name); ?>?')">
                                <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-danger-soft btn-sm"><i class="bi bi-trash"></i></button>
                            </form>
                            <?php else: ?>
                            <button class="btn btn-ghost btn-sm" disabled title="Tidak bisa hapus, masih ada <?php echo e($c->animations_count); ?> film">
                                <i class="bi bi-trash" style="opacity:0.3"></i>
                            </button>
                            <?php endif; ?>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <small style="color:var(--muted)"><i class="bi bi-info-circle me-1"></i>Negara yang masih memiliki film tidak dapat dihapus.</small>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('animations.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Hp Victus\Downloads\animasi-global\resources\views/animations/countries.blade.php ENDPATH**/ ?>