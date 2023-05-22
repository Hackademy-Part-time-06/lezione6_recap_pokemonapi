<x-layout>
<ul>
    @forelse ($pokemonapi as $pokeapi)
    <li>
        <a href="{{route('poke.show',['slug'=>$pokeapi['slug']])}}">
            {{$pokeapi['name']}}
        </a>
    </li> <!-- accesso al singolo elemento dell'array chiave=>valore-->
    @empty
    <li>Nessun Pokemon indicizzato</li>
    @endforelse
</ul>



</x-layout>