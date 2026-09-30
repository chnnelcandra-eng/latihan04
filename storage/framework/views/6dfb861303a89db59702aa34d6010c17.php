<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
 <title><?php echo $__env->yieldContent('title'); ?> - Toko Kita</title>
 <style>
 body { font-family: Arial, sans-serif; margin: 30px; background-color: #f4f6f9; }
 .container { background: white; padding: 25px; border-radius: 8px; box-shadow: 0 2px 4px
rgba(0,0,0,0.1); }
 table { width: 100%; border-collapse: collapse; margin-top: 15px; }
 th, td { border: 1px solid #dee2e6; padding: 10px; text-align: left; }
 th { background-color: #343a40; color: white; }
 .text-danger { color: #dc3545; font-weight: bold; }
 badge-success { background: #198754; color: white; padding: 3px 8px; border-radius: 3px; }
 .badge-secondary { background: #6c757d; color: white; padding: 3px 8px; border-radius:
3px; }
 </style>
</head>
<body>
Hello<br>
<?php echo e($kategori); ?><br>
<?php echo e($x); ?>

<pre>
<?php
print_r($xarray);
?>
<?php echo e($xarray[0]); ?>

<?php echo e($xarray[1]); ?>

<?php echo e($xarray[2]); ?>

<pre>
<?php
print_r($yarray);
?>
<?php echo e($yarray['nama1']); ?>

<?php echo e($yarray['nama2']); ?>

<?php echo e($yarray['nama3']); ?>

<br>
<?php $__currentLoopData = $yarray; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $y): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo e($y); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<br>
<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $z): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo e($z['id']); ?>

<?php echo e($z['nama']); ?>

<?php echo e($z['harga']); ?>

<?php echo e($z['stok']); ?>

<br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH C:\laragon\www\latihan04\resources\views/item.blade.php ENDPATH**/ ?>