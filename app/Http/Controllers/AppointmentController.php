<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;

class AppointmentController extends Controller
{

    public function index()
    {
        
        $appointment = Appointment::latest()->paginate(30);

        return view('appointment', compact('appointment'));

    }

    public function show($id){

        return view('appointments.show', [

            'appointment' => Appointment::findorFail($id)

        ]);

    }

    public function create(){

        return view('appointments.create');

    }

    public function store(){

        $fields = request()->validate([
            'name' => 'required',
            'lastname' => 'required',
            'date' => 'required',
            'time' => 'required',
            'description' => 'required'
        ]);

        Appointment::create($fields);

        return redirect()->route('appointment');
    }

    public function edit($id){

        return view('appointments.edit', [
            'appointment' => Appointment::findorFail($id)
        ]);

    }

    public function update($id){

        $appointment = Appointment::findorFail($id);

        $appointment->update([
            'name' => request('name'),
            'lastname' => request('lastname'),
            'date' => request('date'),
            'time' => request('time'),
            'description' => request('description'),
        ]);

        return redirect()->route('appointment.show', $appointment);

    }

    public function destroy($id){

        $appointment = Appointment::findorFail($id);

        $appointment->delete();

        return redirect()->route('appointment');
    }
}
