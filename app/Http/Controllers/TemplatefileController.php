<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class TemplatefileController extends Controller
{

    public function index() //Muestra en la pagina principal el listado de fichas veterinarias para acceder
    {
        $file = File::latest()->paginate(30);

        return view('templatefile', compact('file')); //Devuelve la vista y con la funcion compact se retorna la variable
    }

    public function show($id){

        return view('files.show', [

            'file' => File::findorFail($id)

        ]);

    }

    public function create(){

        return view('files.create');

    }

    public function store(){

        $fields = request()->validate([
            'rut' => 'required',
            'name' => 'required',
            'inn' => 'required',
            'attention' => 'required',
            'surgery' => 'required',
            'meds' => 'required',
            'typemed' => 'required',
            'rest' => 'required',
            'daysofrest' => 'required',
            'date' => 'required',
            'diagnosis' => 'required',

        ]);

        File::create($fields);

        return redirect()->route('templatefile');

    }

    public function edit($id){

        return view('files.edit', [

            'file' => File::findorFail($id)

        ]);

    }

    public function update($id){

        $file = File::findorFail($id);

        $file->update([
            'rut' => request('rut'),
            'name' => request('name'),
            'inn' => request('inn'),
            'attention' => request('attention'),
            'surgery' => request('surgery'),
            'meds' => request('meds'),
            'typemed' => request('typemed'),
            'rest' => request('rest'),
            'daysofrest' => request('daysofrest'),
            'date' => request('date'),
            'diagnosis' => request('diagnosis'),

        ]);

        
        return redirect()->route('templatefile.show', $file);
    }

    public function destroy($id){

        $file = File::findorFail($id);

        $file->delete();

        return redirect()->route('templatefile');
    }
}
