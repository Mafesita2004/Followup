<?php

namespace App\Http\Controllers;

use App\Models\administrator;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function home()
    {
        return view('administrator.home');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //console.log
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
    public function show(administrator $administrator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(administrator $administrator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, administrator $administrator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(administrator $administrator)
    {
        //
    }
}
