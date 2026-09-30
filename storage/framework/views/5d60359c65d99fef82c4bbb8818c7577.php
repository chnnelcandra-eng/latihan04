
<?php $__env->startSection('title', 'Katalog Item Penjualan'); ?>
<?php $__env->startSection('content'); ?>
 <h2>Katalog Item: <?php echo e($kategori); ?></h2>
 <?php if (isset($component)) { $__componentOriginal5194778a3a7b899dcee5619d0610f5cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.alert','data' => ['type' => 'warning']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'warning']); ?>
 <strong>Perhatian!</strong> Harap periksa ketersediaan stok sebelum memproses
pesanan.
  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $attributes = $__attributesOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__attributesOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf)): ?>
<?php $component = $__componentOriginal5194778a3a7b899dcee5619d0610f5cf; ?>
<?php unset($__componentOriginal5194778a3a7b899dcee5619d0610f5cf); ?>
<?php endif; ?>
 <table>
 <thead>
 <tr>
 <th>No</th>
 <th>Nama Item</th>
 <th>Harga</th>
 <th>Stok</th>
 <th>Status</th>
 </tr>
 </thead>
 <tbody>
 <?php $__empty_1 = true; $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
 <tr>
 <td><?php echo e($loop->iteration); ?></td>
 <td><?php echo e($item['nama']); ?></td>
 <td>Rp <?php echo e(number_format($item['harga'], 0, ',', '.')); ?></td>
 <td>
 <?php if($item['stok'] == 0): ?>
 <span class="text-danger">Habis</span>
 <?php else: ?>
 <?php echo e($item['stok']); ?> unit
 <?php endif; ?>
 </td>
 <td>
 <span class="<?php echo e($item['is_active'] ? 'badge-success' : 'badge-secondary'); ?>">
 <?php echo e($item['is_active'] ? 'Aktif' : 'Non-Aktif'); ?>

 </span>
 </td>
 </tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
 <tr>
 <td colspan="5" style="text-align: center;">Tidak ada data item dalam katalog
ini.</td>
 </tr>
 <?php endif; ?>
 </tbody>
 </table>
 <div style="margin-top: 20px;">
     <p><strong>Total Jenis Item:</strong> <?php echo e(count($items)); ?></p>
 </div>
 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\latihan04\resources\views/item/katalog.blade.php ENDPATH**/ ?>