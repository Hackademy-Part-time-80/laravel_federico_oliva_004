

<x-layout title="Lista Servizi">
  <div>
    <h1>
      I NOSTRI PRODOTTI
    </h1>
    <div class="container-lg">
        <ul>
            @foreach($services as $servizio)
            <x-card :services="$services" />
            @endforeach
        </ul>
    </div>
  </div>
</x-layout>