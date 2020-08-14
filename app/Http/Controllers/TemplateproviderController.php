<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provider;

class TemplateproviderController extends Controller
{

    public function index() //Muestra en la pagina principal el listado de proveedores para acceder
    {
        $provider = Provider::latest()->paginate(30);

        return view('templateprovider', compact('provider')); //Devuelve la vista y con la funcion compact se retorna la variable
    }

    public function show($id){

        return view('providers.show', [

            'provider' => Provider::findorFail($id)

        ]);

    }

    public function create(){

        return view('providers.create');

    }

    public function store(){

        $fields = request()->validate([
            'rut' => 'required',
            'name' => 'required',
            'typemed' => 'required',
            'namemed' => 'required',
            'description' => 'required',
            'cant' => 'required',
            'date' => 'required',

        ]);

        Provider::create($fields);

        return redirect()->route('templateprovider');


    }

    public function edit($id){

        return view('providers.edit', [

            'provider' => Provider::findorFail($id)

        ]);

    }

    public function update($id){

        $provider = Provider::findorFail($id);

        $provider->update([
            'rut' => request('rut'),
            'name' => request('name'),
            'typemed' => request('typemed'),
            'namemed' => request('namemed'),
            'description' => request('description'),
            'cant' => request('cant'),
            'date' => request('date'),

        ]); 

        return redirect()->route('templateprovider.show', $provider);

    }

    public function destroy($id){

        $provider = Provider::findorFail($id);

        $provider->delete();

        return redirect()->route('templateprovider');
    }
}
