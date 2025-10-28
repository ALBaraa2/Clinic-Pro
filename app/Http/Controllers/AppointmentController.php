<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Resources\AppointmentResource;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $appointments = Appointment::query();

        if ($user->employee->position === 'doctor') {
            $appointments->where('doctor_id', $user->id);
        }

        if ($request->has('from')) {
            $appointments->where('appointment_date', '>=', $request->input('from'));
        }

        if ($request->has('to')) {
            $appointments->where('appointment_date', '<=', $request->input('to'));
        }

        if ($request->has('status')) {
            if ($request->query('status') === 'canceled') {
                $appointments->onlyTrashed();
            } else {
                $appointments->where('status', $request->query('status'));
            }
        }

        if ($request->has('priority')) {
            $appointments->where('priority', $request->query('priority'));
        }

        return AppointmentResource::collection($appointments->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        return new AppointmentResource($appointment);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
