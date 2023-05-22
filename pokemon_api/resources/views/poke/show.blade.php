<x-layout>
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$pokeapi['name']}}</h5><!-- rotta parametrica-->
        </div>
      </div>

<!-- Il form-->
<div class="container py-4">
    @if ($errors->any())<!-- criptino per gli errori di compilazione-->
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{route('poke.send')}}" method="POST">

        @method('POST')
        @csrf<!-- per non "sniffare" i dati-->

        <input class="form-control" type="hidden" placeholder="None" name="pokemon_name" value="{{$pokeapi['slug']}}"/>

    <!-- nome-->
      <div class="mb-3">
        <label class="form-label">Nome e Cognome</label>
        <input class="form-control" type="text" placeholder="Nome e Cognome" name="name" value="{{old('name')}}" />
        @error('name')
        Ops, hai dimenticato di inserire il tuo nome e cognome
        @enderror
      </div>
  
      <!-- tel -->
      <div class="mb-3">
        <label class="form-label">Telefono</label>
        <input class="form-control" type="text" placeholder="+39 1234567892" name="phone" value="{{old('phone')}}" />
        @error('phone')
        Ops, hai dimenticato di inserire un recapito telefonico
        @enderror
        
      </div>
    <!-- mail -->
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input class="form-control" type="email" placeholder="esempio@pokemon.com" name="email" value="{{old('email')}}" />
        @error('email')
        Ops, hai dimenticato di inserire la tua mail
        @enderror
      </div>
      <!--messaggio -->
      <div class="mb-3">
        <label class="form-label" >Messaggio</label>
        <textarea class="form-control" type="text" placeholder="Messaggio" name="message" style="height: 10rem;">{{old('message')}}</textarea>
      </div>
  
      <!-- button -->
      <div class="d-grid">
        <button class="btn btn-primary btn-lg" type="submit" >Invia</button>
      </div>
  
    </form>
  
  </div>
</x-layout>