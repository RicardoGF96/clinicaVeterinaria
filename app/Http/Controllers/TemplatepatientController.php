<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class TemplatepatientController extends Controller
{

    public function index() //Muestra en la pagina principal el listado de pacientes para acceder
    {
        $patient = Patient::latest()->paginate(30);

        return view('templatepatient', compact('patient')); //Devuelve la vista y con la funcion compact se retorna la variable
    }

    public function show($id){

        return view('patients.show', [

            'patient' => Patient::findorFail($id)

        ]);

    }

    public function create(){

        return view('patients.create');

    }

    public function store(){

        $fields = request()->validate([
            'rut' => 'required',
            'name' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'address' => 'required',
            'phone' => 'required',

        ]);

        Patient::create($fields);

        return redirect()->route('templatepatient');
    }

    public function edit($id){

        return view('patients.edit', [
            'patient' => Patient::findorFail($id)
        ]);
    }

    public function update($id){

        $patient = Patient::findorFail($id);

        $patient->update([
            'rut' => request('rut'),
            'name' => request('name'),
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'address' => request('address'),
            'phone' => request('phone'),

        ]);

        return redirect()->route('templatepatient.show', $patient);
    }

    public function destroy($id){

        $patient = Patient::findorFail($id);

        $patient->delete();

        return redirect()->route('templatepatient');
    }
}
