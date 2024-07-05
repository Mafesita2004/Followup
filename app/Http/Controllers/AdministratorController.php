<?php

namespace App\Http\Controllers;

use App\Models\administrator;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
   

    /**
     * Muestra una lista del recurso.
     * En este caso, muestra la vista del panel de inicio del administrador.
     */
    public function index()
    {
        return view('administrator.home');
    }

    /**
     * Muestra el formulario para crear un nuevo recurso.
     * Este método está vacío y se puede implementar según sea necesario.
     */
    public function create()
    {
        //
    }

    /**
     * Almacena un nuevo recurso en el almacenamiento.
     * Este método está vacío y se puede implementar según sea necesario.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Muestra el recurso especificado.
     * Este método está vacío y se puede implementar según sea necesario.
     */
    public function show(administrator $administrator)
    {
        //
    }

    /**
     * Muestra el formulario para editar el recurso especificado.
     * Este método está vacío y se puede implementar según sea necesario.
     */
    public function edit(administrator $administrator)
    {
        //
    }

    /**
     * Actualiza el recurso especificado en el almacenamiento.
     * Este método está vacío y se puede implementar según sea necesario.
     */
    public function update(Request $request, administrator $administrator)
    {
        //
    }

    /**
     * Elimina el recurso especificado del almacenamiento.
     * Este método está vacío y se puede implementar según sea necesario.
     */
    public function destroy(administrator $administrator)
    {
        //
    }
}
?>
