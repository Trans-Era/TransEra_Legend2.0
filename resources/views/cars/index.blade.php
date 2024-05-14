<x-app-layout>
    @section('meta_title', 'Nottre Flotte - Mustang, Corvette, Pontiac...')
    @section('meta_description', 'Trans Era Legend est fier de vous présenter sa flotte de vehicule américaine à petit prix et disponible ! tel que notre Mustang ou notre Corvette.')
    <x-car.index.hero />
    <x-car.index.grid :cars="$cars" :brands="$brands" :types="$types" />
</x-app-layout>