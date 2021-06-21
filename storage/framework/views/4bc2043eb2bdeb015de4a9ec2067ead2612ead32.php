<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  <?php if($category->children->where('published', 1)->count()): ?>
    <li class="dropdown">
      <a href="<?php echo e(url("/blog/category/$category->slug")); ?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        <?php echo e($category->title); ?> <span class="caret"></span>
      </a>
      <ul class="dropdown-menu" role="menu">
        <?php echo $__env->make('layouts.top_menu', ['categories' => $category->children], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </ul>
  <?php else: ?>
    <li>
      <a href="<?php echo e(url("/blog/category/$category->slug")); ?>"><?php echo e($category->title); ?></a>
  <?php endif; ?>
    </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
