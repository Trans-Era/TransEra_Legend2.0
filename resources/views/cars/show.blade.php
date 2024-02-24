<x-minimal-layout>
    <div x-data="vehicle()" x-init="initScrollAnchors()">
        <x-navbar.vehicle :car='$car' />
        <x-car.hero       :car='$car' :descriptions='$descriptions' :photos='$photos' />
        <x-car.wrapper    :car='$car' :descriptions='$descriptions' :photos='$photos' />
    </div>
</x-minimal-layout>