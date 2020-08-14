<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pet;

class TemplatepetController extends Controller
{

    public function index() //Muestra en la pagina principal el listado de mascotas para acceder
    {
        $pet = Pet::latest()->paginate(30);

        return view('templatepet', compact('pet')); //Devuelve la vista y con la funcion compact se retorna la variable
    }

    public function show($id){

        return view('pets.show', [

            'pet' => Pet::findorFail($id)

        ]);

    }

    public function create(){

        return view('pets.create');

    }

    public function store(){

        $fields = request()->validate([
            'rut' => 'required',
            'name' => 'required',
            'animaltype' => 'required',
            'race' => 'required',
            'age' => 'required',

        ]);

        Pet::create($fields);

        return redirect()->route('templatepet');

    }

    public function edit($id){

        return view('pets.edit', [
            'pet' => Pet::findorFail($id)
        ]);
    }

    public function update($id){

        $pet = Pet::findorFail($id);

        $pet->update([
            'rut' => request('rut'),
            'name' => request('name'),
            'animaltype' => request('animaltype'),
            'race' => request('race'),
            'age' => request('age'),

        ]);

        return redirect()->route('templatepet.show', $pet);

    }

    public function destroy($id){

        $pet = Pet::findorFail($id);

        $pet->delete();

        return redirect()->route('templatepet');
    }
}
