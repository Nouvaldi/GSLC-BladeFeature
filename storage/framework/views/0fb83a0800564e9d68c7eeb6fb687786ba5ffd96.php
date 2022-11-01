<?php $__env->startSection('title', $champions->name); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid text-center bg-dark">
        <div class="row" style="padding-top: 100px">
            <div class="col">
                <img src=<?php echo e($champions->image_url); ?> alt="">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-light text-uppercase fw-bold fst-italic" style="margin-top: -250px; margin-bottom: -10px"><?php echo e($champions->title); ?></p>
                <h1 class="display-1 text-light text-uppercase fw-bold fst-italic" ><?php echo e($champions->name); ?></h1>
            </div>
        </div>

        <div class="container bg-dark align-items-top">
            <div class="row justify-content-center" style="padding: 50px 0">
                <div class="col-2 mt-4 border-end border-light">
                    <p class="text-warning text-uppercase border-bottom border-light">Role</p>

                    <?php if($champions->role == 'Mage'): ?>
                    <img src="https://img.rankedboost.com/wp-content/uploads/2017/07/Mage-1-120x102.png" alt="" style="max-width: 80px;">

                    <?php elseif($champions->role == 'Tank'): ?>
                    <img src="https://img.rankedboost.com/wp-content/uploads/2017/07/Tank-1-120x102.png" alt="" style="max-width: 80px;">

                    <?php elseif($champions->role == 'Fighter'): ?>
                    <img src="https://img.rankedboost.com/wp-content/uploads/2017/07/Fighter-1-120x102.png" alt="" style="max-width: 80px;">

                    <?php elseif($champions->role == 'Assassin'): ?>
                    <img src="https://img.rankedboost.com/wp-content/uploads/2017/07/Assassin-1-120x102.png" alt="" style="max-width: 80px;">

                    <?php elseif($champions->role == 'Marksman'): ?>
                    <img src="https://img.rankedboost.com/wp-content/uploads/2017/07/Marksman-1-120x102.png" alt="" style="max-width: 80px;">

                    <?php elseif($champions->role == 'Support'): ?>
                    <img src="https://i.pinimg.com/originals/bf/3f/88/bf3f88c18d6385422c5bb23a595327d0.png" alt="" style="max-width: 80px;">

                    <?php endif; ?>

                    <p class="text-light"><?php echo e($champions->role); ?></p>
                </div>
                <div class="col-4 mt-4" >
                    <p class="text-warning text-uppercase border-bottom border-light">Lore</p>
                    <p class="text-light"><?php echo e($champions->lore); ?>...</p>
                </div>
            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Projects\gslc\resources\views/champion.blade.php ENDPATH**/ ?>