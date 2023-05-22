<x-layout>
<ul>
  
    @forelse ($pokemonapi['results'] as $pokeapi)<!-- 'result' è il nome principale, da qui estreggo le singol chiavi/valore-->
    <li>
        
        <a href="{{route('poke.show',['name'=>$pokeapi['name']])}}"><!-- la chiave primaria è 'name'-->
            {{$pokeapi['name']}}
        </a>
    </li> 
    @empty
    <li>Nessun Pokemon indicizzato</li>
    @endforelse
</ul>



</x-layout>