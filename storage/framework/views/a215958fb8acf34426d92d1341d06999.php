

<?php $__env->startSection('content'); ?>
<h2>Katalog Barang</h2>

<table border="1" cellpadding="8" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Item</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Diskon (%)</th>
            <th>Harga Bersih</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                $hargaBersih = $item['harga'] - ($item['harga'] * $item['diskon_persen'] / 100);
            ?>
            <tr <?php if($loop->index < 2): ?> style="background-color: pink;" <?php endif; ?>>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($item['kode']); ?></td>
                <td><?php echo e($item['nama_item']); ?></td>
                <td><?php echo e($item['kategori']); ?></td>
                <td>Rp <?php echo e(number_format($item['harga'], 0, ',', '.')); ?></td>
                <td><?php echo e($item['diskon_persen']); ?>%</td>
                <td>Rp <?php echo e(number_format($hargaBersih, 0, ',', '.')); ?></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\latihan04\resources\views/penjualan/katalog.blade.php ENDPATH**/ ?>