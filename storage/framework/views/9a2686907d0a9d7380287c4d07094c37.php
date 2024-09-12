<!DOCTYPE html>
<html>

<head>
    <title>Data Penghitung</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header>
            <h1>Data Penghitung</h1>
        </header>
        <table class="table">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Sekolah</th>
                    <th>Usia</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Hasil</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $calculations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $calculation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <?php if($calculation->created_at): ?>
                                <?php echo e($calculation->created_at->format('Y-m-d H:i:s')); ?>

                            <?php else: ?>
                                N/A
                            <?php endif; ?>
                        </td>
                        <td><?php echo e($calculation->name); ?></td>
                        <td><?php echo e($calculation->school); ?></td>
                        <td><?php echo e($calculation->age); ?></td>
                        <td><?php echo e($calculation->address); ?></td>
                        <td><?php echo e($calculation->phone); ?></td>
                        <td><?php echo e($calculation->result); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>

</html>
<?php /**PATH C:\Users\mzida\Downloads\Compressed\UJIKOM_Bangun-datar-main\UJIKOM_Bangun-datar-main\resources\views/data.blade.php ENDPATH**/ ?>