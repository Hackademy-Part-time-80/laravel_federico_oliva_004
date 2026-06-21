

<x-layout title="Lista Servizi">
  <div  class="container mt-4">
    <h1 class="mb-3">
      I NOSTRI PRODOTTI
    </h1>
    <div class="d-flex gap-3">
        
           @foreach($servizi as $chiave => $servizio)
    <x-card :chiave="$chiave" :servizio="$servizio" />
@endforeach
        
    </div>
  </div>
</x-layout>