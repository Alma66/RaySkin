<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Mostrar una lista de todos los administradores con paginación y filtrado.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Admin::query();

        // Filtrado
        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        if ($request->has('email')) {
            $query->where('email', 'like', '%' . $request->input('email') . '%');
        }

        // Paginación
        $admins = $query->paginate(10); // Paginación de 10 administradores por página

        return view('admin.showAll', compact('admins'));
    }

    /**
     * Mostrar el formulario para crear un nuevo administrador.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Almacenar un nuevo administrador en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function StoreAdminRequest(Request $request)
    {
        $validatedData = $request->validated();

      $admin =  Admin::create([
             'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
           ]);

        return redirect()->route('admins.showAll')->with('success', 'Admin created successfully');
    }

    /**
     * Mostrar los detalles de un administrador específico.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = Admin::find($id);

        if (!$admin) {
            return redirect()->route('admins.showAll')
                             ->with('error', 'Admin not found');
        }

        return view('admin.show', compact('admin'));
    }

    /**
     * Mostrar el formulario para editar un administrador existente.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::find($id);

        if (!$admin) {
            return redirect()->route('admins.showAll')
                             ->with('error', 'Admin not found');
        }

        return view('admin.edit', compact('admin'));
    }

    /**
     * Actualizar un administrador existente en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, $id)
    {
        $validatedData = $request->validated();

        $admin = Admin::find($id);

        if (!$admin) {
            return redirect()->route('admins.showAll')
                             ->with('error', 'Admin not found');
        }

        $admin->update([
            'name' => $validatedData['name'] ?? $admin->name,
            'email' => $validatedData['email'] ?? $admin->email,
            'password' => isset($validatedData['password']) ? Hash::make($validatedData['password']) : $admin->password,
          ]);

        return redirect()->route('admins.show', $id)->with('success', 'Admin updated successfully');
    }

    /**
     * Eliminar un administrador específico de la base de datos.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = Admin::find($id);

        if (!$admin) {
            return redirect()->route('admins.showAll')
                             ->with('error', 'Admin not found');
        }

        $admin->delete();

        return redirect()->route('admins.showAll')->with('success', 'Admin deleted successfully');
    }
}
