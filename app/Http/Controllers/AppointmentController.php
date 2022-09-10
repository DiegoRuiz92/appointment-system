<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Office;
use App\Models\Owner;
use App\Models\Workshop;
use Illuminate\Http\Request;

/**
 * Class AppointmentController
 * @package App\Http\Controllers
 */
class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::paginate();

        return view('appointment.index', compact('appointments'))
            ->with('i', (request()->input('page', 1) - 1) * $appointments->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $appointment = new Appointment();
        $offices = Office::pluck('name','id');
        $workshops = Workshop::pluck('name','id');
        $owners = Owner::pluck('firstname','id', 'document');
        return view('appointment.create', compact('appointment','offices','workshops','owners'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Appointment::$rules);

        $appointment = Appointment::create($request->all());

        return redirect()->route('appointments.index')
            ->with('success', 'Appointment created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appointment = Appointment::find($id);

        return view('appointment.show', compact('appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appointment = Appointment::find($id);
        $offices = Office::pluck('name','id');
        $workshops = Workshop::pluck('name','id');
        $owners = Owner::pluck('firstname','id', 'document');

        return view('appointment.edit', compact('appointment','offices','workshops','owners'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Appointment $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        request()->validate(Appointment::$rules);

        $appointment->update($request->all());

        return redirect()->route('appointments.index')
            ->with('success', 'Appointment updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $appointment = Appointment::find($id)->delete();

        return redirect()->route('appointments.index')
            ->with('success', 'Appointment deleted successfully');
    }
}
