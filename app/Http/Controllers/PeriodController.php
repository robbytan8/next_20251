<?php

namespace App\Http\Controllers;

use App\Models\Period;
use Illuminate\Http\Request;

class PeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $periods = Period::all("id", "name");
        return view('adm-period.index', compact('periods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adm-period.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:100|unique:period,name',
        ]);
        $period = new Period($validatedData);
        $period->save();
        return redirect()->route('adm-period.index')->with('success', 'Period created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Period $period)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Period $period)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Period $period)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Period $period)
    {
        //
    }
}
