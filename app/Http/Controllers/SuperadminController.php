<?php

namespace App\Http\Controllers;

use App\Models\superadmin;
use Illuminate\Http\Request;

class SuperadminController extends Controller
{

    public function index()
    {
        return view('superadmin.home');
    }

    public function SuperAdminAdministrator()
    {
        return view('superadmin.SuperAdmin-Administrator');
    }

    public function SuperAdminInstructor()
    {
        return view('superadmin.SuperAdmin-Instructor');
    }

    public function SuperAdminAprendiz()
    {
        return view('superadmin.SuperAdmin-Aprendiz');
    }

    public function SuperAdminPerfil()
    {
        return view('superadmin.SuperAdmin-Perfil');
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
    public function show(superadmin $superadmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(superadmin $superadmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, superadmin $superadmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(superadmin $superadmin)
    {
        //
    }
}
