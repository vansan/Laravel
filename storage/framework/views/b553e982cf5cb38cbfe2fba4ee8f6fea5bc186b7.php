<?php $__env->startSection('content'); ?>

<div class="container">
                <?php if(Auth::check()): ?>
                        <h2>Tasks List</h2>
                        <a href="/task" class="btn btn-primary">Add new Task</a>
                        <table class="table">
                            <thead><tr>
                                <th colspan="2">Tasks</th>
                            </tr>
                        </thead>
                        <tbody><?php $__currentLoopData = $user->task; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>
                                    <?php echo e($task->description); ?>

                                </td>
                                <td>
                                   
                                    <form action="/task/<?php echo e($task->id); ?>">
                                        <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                                        <button type="submit" name="delete" formmethod="POST" class="btn btn-danger">Delete</button>
                                        <?php echo e(csrf_field()); ?>

                                    </form>
                                </td>
                            </tr>
                            
    
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></tbody>
                        </table>
                <?php else: ?>
                    <h3>You need to log in. <a href="/login">Click here to login</a></h3>
                <?php endif; ?>
               
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>