<x-minimal-layout>
    @section('meta_title', 'Location de ' . $car->name)
    @section('meta_description', 'Location de ' . $car->name . ' à petit prix disponible sous peu à Metz, Strasbourg, Thionville, Nancy et au Luxembourg')
    <div x-data="vehicle()" x-init="initScrollAnchors()">
        <x-navbar.vehicle :car='$car' />
        <x-car.hero       :car='$car' :descriptions='$descriptions' :photos='$photos' />
        <x-car.wrapper    :car='$car' :descriptions='$descriptions' :photos='$photos' />
    </div>
</x-minimal-layout>