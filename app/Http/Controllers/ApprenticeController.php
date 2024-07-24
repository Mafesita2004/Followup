<?php

namespace App\Http\Controllers;

use App\Models\apprentice;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   
    public function index()
    {
        return view('apprentice.home');
    }

    public function calendar()
    {
        return view('apprentice.calendar');
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
    public function show()
    {
        $apprentice = Apprentice::findOrFail();
        return view('apprentice.home', compact('apprentice'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(apprentice $apprentice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, apprentice $apprentice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(apprentice $apprentice)
    {
        //
    }
}
