<div
  class="
    sticky
    inset-x-0
    top-28
    left-0
    p-5
    md:p-8
    ptablet:max-w-md ptablet:mx-auto ptablet:-mt-8
    ltablet:p-6
    bg-white
    dark:bg-muted-900
    border border-muted-200
    dark:border-muted-800
    rounded-md
    shadow-xl shadow-muted-400/10
    dark:shadow-muted-800/10
  "
>
  <div class="w-full">
    <div class="w-full relative flex rounded-md bg-muted-100 dark:bg-muted-800">
      <a
        class="
          relative
          h-12
          flex-1 flex
          items-center
          justify-center
          font-sans
          z-10
          cursor-pointer
          select-none
        "
        :class="activeTab === 'cash'? 'text-muted-800 dark:text-muted-100' : 'text-muted-400'"
        data-tab="cash"
        @click.prevent="toggleTabs($event)"
      >
        Jour
      </a>
      <a
        class="
          relative
          h-12
          flex-1 flex
          items-center
          justify-center
          font-sans
          z-10
          cursor-pointer
          select-none
        "
        :class="activeTab === 'lease'? 'text-muted-800 dark:text-muted-100' : 'text-muted-400'"
        data-tab="lease"
        @click.prevent="toggleTabs($event)"
      >
        Semaine
      </a>
      <a
        class="
          relative
          h-12
          flex-1 flex
          items-center
          justify-center
          font-sans
          z-10
          cursor-pointer
          select-none
        "
        data-tab="loan"
        :class="activeTab === 'loan'? 'text-muted-800 dark:text-muted-100' : 'text-muted-400'"
        @click.prevent="toggleTabs($event)"
      >
        Mois
      </a>
      <span
        class="
          block
          absolute
          h-full
          w-1/3
          rounded-md
          bg-white
          dark:bg-muted-1000
          border border-muted-200
          dark:border-muted-800
          shadow-xl shadow-muted-400/10
          dark:shadow-muted-800/10
          transition-all
          duration-300
        "
        :class="[
                    activeTab === 'cash' && 'ml-0' ,
                    activeTab === 'lease' && 'ml-[33.3%]' ,
                    activeTab === 'loan' && 'ml-[66.6%]' 
                  ]"
      ></span>
    </div>

    <!--Content-->
    <div class="w-full pt-6">
      <!--Cash-->
      <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.car.purchase.cash','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('car.purchase.cash'); ?>
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
      <!--Lease-->
      <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.car.purchase.lease','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('car.purchase.lease'); ?>
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
      <!--Loan-->
      <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.car.purchase.loan','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('car.purchase.loan'); ?>
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
<?php /**PATH C:\laragon\www\TransEra_website\resources\views/components/car/purchase.blade.php ENDPATH**/ ?>