<!DOCTYPE html>
<html>
    <head>
        <title>Calculator</title>
    </head>
    <body>
        <h1>Calculator</h1>
        <form action="calculator/add" method="post">
            <?php echo csrf_field(); ?>
            <input type="number" name="num1" placeholder="Enter first number" required>
            <input type="number" name="num2" placeholder="Enter second number" required>
            <button type="submit">Tambah</button>
        </form>
        <form action="calculator/subtract" method="post">
            <?php echo csrf_field(); ?>
            <input type="number" name="num1" placeholder="Enter first number" required>
            <input type="number" name="num2" placeholder="Enter second number" required>
            <button type="submit">Kurang</button>
        </form>
        <form action="calculator/multiply" method="post">
            <?php echo csrf_field(); ?>
            <input type="number" name="num1" placeholder="Enter first number" required>
            <input type="number" name="num2" placeholder="Enter second number" required>
            <button type="submit">Kali</button>
        </form>
        <form action="calculator/divide" method="post">
            <?php echo csrf_field(); ?>
            <input type="number" name="num1" placeholder="Enter first number" required>
            <input type="number" name="num2" placeholder="Enter second number" required>
            <button type="submit">Bagi</button>
        </form>
    </body>
</html><?php /**PATH C:\laragon\www\latihan03\resources\views/calculator.blade.php ENDPATH**/ ?>