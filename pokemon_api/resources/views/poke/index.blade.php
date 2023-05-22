<x-layout>
<ul>
  
    @forelse ($pokemonapi['results'] as $pokeapi)
    <li>
        
        <a href="{{route('poke.show',['name'=>$pokeapi['name']])}}">
            {{$pokeapi['name']}}
        </a>
    </li> <!-- accesso al singolo elemento dell'array chiave=>valore-->
    @empty
    <li>Nessun Pokemon indicizzato</li>
    @endforelse
</ul>



</x-layout>