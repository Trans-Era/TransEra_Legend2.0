<div
  class="
    absolute
    top-4
    inset-x-0
    w-full
    max-w-xs
    rounded
    mx-auto
    p-2
    bg-white
    dark:bg-muted-800
    shadow-xl shadow-muted-400/10
    dark:shadow-muted-800/10
    z-10
  "
>
  <div
    class="
      w-full
      flex
      font-medium
      items-center
      justify-between
      gap-4
      text-muted-900
      dark:text-muted-100
    "
  >
    <!--Home link-->
    <a
      href="<?php echo e(url('/')); ?>"
      class="
        flex
        items-center
        justify-center
        h-14
        w-14
        rounded
        text-muted-400
        hover:text-primary-500
        border border-muted-200
        dark:border-muted-700
        hover:border-primary-500
        dark:hover:border-primary-500
        hover:shadow-xl
        shadow-muted-400/10
        dark:hover:shadow-muted-800/10
        transition-all
        duration-300
      "
    >
      <i class="iconify w-6 h-6" data-icon="ph:house-duotone"></i>
    </a>
    <!--Site logo-->
    <div
      class="
        h-14
        w-14
        group-hover:text-primary-500
        transition-colors
        duration-300
      "
    >
      <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.vector.logos.logo','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('vector.logos.logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    </div>
    <!--Theme toggler-->
    <div
      class="
        flex
        items-center
        justify-center
        h-14
        w-14
        rounded
        bg-muted-100
        dark:bg-muted-700
      "
    >
      <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.theme.toggler-base','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('theme.toggler-base'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
    </div>
  </div>
</div>
<?php /**PATH C:\laragon\www\TransEra_website\resources\views/components/navbar/pill.blade.php ENDPATH**/ ?>