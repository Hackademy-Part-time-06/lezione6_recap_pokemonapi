<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;


class PublicController extends Controller
{
    //array chiave=>valore
    public static $pokemonapi = [//METODO STATICO
        ['name' => 'Bulbasaur', 'slug' => 'bulbasaur'],
        ['name' => 'Pikachu', 'slug' => 'pikachu'],
        ['name' => 'Jigglypuff', 'slug' => 'jigglypuff'],
        ['name' => 'Charizard', 'slug' => 'charizard'],
        ['name' => 'Axev Drago', 'slug' => 'axev-drago'],

    ];
    public function index()
    {

        $pokemonapi = Http::get('https://pokeapi.co/api/v2/pokemon')->json();
        //dd($pokemonapi);
        return view('poke.index', ['pokemonapi' => $pokemonapi]); //passo l'array STATICO chiave=>valore di cui sopra
    }

    public function show($slug)
    {
        $pokemonapi = Http::get('https://pokeapi.co/api/v2/pokemon/' . $slug)->json();//.$slug RENDE L'URI DINAMICOOOOOOOOOOOOOOO;

        // foreach (self::$pokemonapi as $pokeapi) { //ciclo dall'array statico il singolo elemento
        //     if ($slug == $pokeapi['slug']) { //se il nome richiamato $slug(attributo) che sto cliccando è uguale al contenuto che voglio proporre in show che ritrovo nella parte chiave=>valore,allora ritornami la vista di poke.show con l'elemento ed i suoi dati(non metto il chiave valore perchè deve tornare TUTTI I DATI)

        return view('poke.show', ['pokeapi' => $pokemonapi]);//precedentemente c'era un self, perchè statico, ora richiamo invece un'api esterno, quindi diventa DINAMICO. Elimino, quindi, anche il foreach (commentato) che porta con se il metodo statico
        //}
        //} 
        //altrimenti errore 404
        abort(404);
    }

    public function send(Request $body)
    {
        $body->validate([
            "pokemon_name" => "required",
            "name" => "required",
            "phone" => "required",
            "email" => "required",
            "message" => "required",
        ]);

        $data = [
            "pokemon_name" => ucfirst($body->input('pokemon_name')),
            "name" => $body->name,
            "phone" => $body->phone,
            "email" => $body->email,
            "message" => $body->message,
        ];
        //dd($data);
    }
}
