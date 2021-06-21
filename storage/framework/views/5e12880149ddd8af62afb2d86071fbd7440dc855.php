<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="jumbotron">
          <p><span class="label label-primary">Категорий <?php echo e($count_categories); ?></span></p>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="jumbotron">
          <p><span class="label label-primary">Материалов <?php echo e($count_articles); ?></span></p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <a class="btn btn-block btn-default" href="<?php echo e(route('admin.category.create')); ?>">Создать категорию</a>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <a class="list-group-item" href="<?php echo e(route('admin.category.edit', $category)); ?>">
            <h4 class="list-group-item-heading"><?php echo e($category->title); ?></h4>
            <p class="list-group-item-text">
              <?php echo e($category->articles()->count()); ?>

            </p>
          </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <div class="col-sm-6">
        <a class="btn btn-block btn-default" href="<?php echo e(route('admin.article.create')); ?>">Создать материал</a>
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <a class="list-group-item" href="<?php echo e(route('admin.article.edit', $article)); ?>">
            <h4 class="list-group-item-heading"><?php echo e($article->title); ?></h4>
            <p class="list-group-item-text">
              <?php echo e($article->categories()->pluck('title')->implode(', ')); ?>

            </p>
          </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app_admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>