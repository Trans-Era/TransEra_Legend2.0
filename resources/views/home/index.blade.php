<x-app-layout>
    @section('meta_title', 'Accueil')
    @section('meta_description', 'Location de vehicule américaine. Notre flotte contient des Mustang, Corvette et Pontiac. Nous somme disponible à Metz, Thionville, Nancy, Strasbourg et au Luxembourg')
    <x-home.hero :cars="$cars" />
    <x-car.featured />
    <x-car.brands />
    <x-car.video />
</x-app-layout>