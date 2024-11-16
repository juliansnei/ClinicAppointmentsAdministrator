<?php

namespace App\Http\Controllers;

use App\Models\Medical_appointments;
use Illuminate\Http\Request;
use \App\Models\User;

class MedicalAppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos = Medical_appointments::orderBy('illness', 'desc')->paginate(10);
        $user = User::find(auth()->id());
        $user_name = $user ? $user->name : 'User not found';
        return view('medical-appointments', compact('datos','user_name'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create-appointments');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $appointments = new Medical_appointments();
        $appointments->user_id = auth()->id();
        $appointments->illness = $request->post('illness');
        $appointments->comment = $request->post('comment');
        $appointments->appointment_date = $request->post('appointment_date');
        $appointments->save();

        return redirect()->route("medical-appointments.index")->with("success", "Appointment asigned succesfully!!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Medical_appointments $medical_appointments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medical_appointments $medical_appointments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medical_appointments $medical_appointments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medical_appointments $medical_appointments)
    {
        //
    }
}
