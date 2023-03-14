

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Tabla de Datos')); ?></div>
                <form action="<?php echo e(route('home.store')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div>
                    <label class="col-md-4 col-form-label text-md-end" for="nombre">Nombre: </label>
                    <input type="text" name="nombre" id="nombre" required>
                    </div>
                    <div>
                    <label class="col-md-4 col-form-label text-md-end" for="marca">Marca: </label>
                    <input type="text" name="marca" id="marca" required>
                    </div>
                    <div>
                    <label class="col-md-4 col-form-label text-md-end" for="precio">Precio: </label>
                    <input type="text" name="precio" id="precio" required>
                    </div>
                    <div>
                    <label class="col-md-4 col-form-label text-md-end" for="cantidad">Cantidad: </label>
                    <input type="text" name="cantidad" id="cantidad" required>
                    </div>
                    <br>
                    <button  type="submit" class="btn btn-primary">Agregar</button>
                    </form>                    
                    <table>
                        <thead>
                            <tr>
                                <th>Nombre</th>     
                                <th>Marca</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $producto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($producto->nombre); ?></td>
                                <td><?php echo e($producto->marca); ?></td>
                                <td><?php echo e($producto->precio); ?></td>
                                <td><?php echo e($producto->cantidad); ?></td>
                                <td>
                                    <form action="<?php echo e(route('home.destroy',$producto)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                                <td>
                                    <button id="editar" class="btn btn-warning">Editar</button>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<dialog id="favDialog">
                <form action="<?php echo e(route('home.update', $producto ->id)); ?>"  method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <?php echo csrf_field(); ?>
                    <div>
                    <label class="col-md-4 col-form-label text-md-end" for="nombre">Nombre: </label>
                    <input type="text" name="nombre" id="nombre" value="<?php echo e($producto -> nombre); ?>" required>
                    </div>
                    <div>
                    <label class="col-md-4 col-form-label text-md-end" for="marca">Marca: </label>
                    <input type="text" name="marca" id="marca" value="<?php echo e($producto -> marca); ?>" required>
                    </div>
                    <div>
                    <label class="col-md-4 col-form-label text-md-end" for="precio">Precio: </label>
                    <input type="text" name="precio" id="precio" value="<?php echo e($producto -> precio); ?>" required>
                    </div>
                    <div>
                    <label class="col-md-4 col-form-label text-md-end" for="cantidad">Cantidad: </label>
                    <input type="text" name="cantidad" id="cantidad" value="<?php echo e($producto -> marca); ?>" required>
                    </div>
                    <div>
                        <input type="hidden" name="id" value="<?php echo e($producto -> id); ?>" >
                    </div>
                    <br>
                    <button  type="submit" class="btn btn-success">Guardar</button>
                    </form>

                    <div>
                    <button id="cerrar "class="btn btn-danger">Cerrar</button>
                    </div>
</dialog>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\luisr\OneDrive\Escritorio\Paginas\example-app\resources\views/home.blade.php ENDPATH**/ ?>