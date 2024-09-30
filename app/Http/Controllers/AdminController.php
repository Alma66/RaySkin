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
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admins.create')
                             ->withErrors($validator)
                             ->withInput();
        }

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
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
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|string|email|max:255|unique:admins,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admins.edit', $id)
                             ->withErrors($validator)
                             ->withInput();
        }

        $admin = Admin::find($id);

        if (!$admin) {
            return redirect()->route('admins.showAll')
                             ->with('error', 'Admin not found');
        }

        $admin->update([
            'name' => $request->name ?? $admin->name,
            'email' => $request->email ?? $admin->email,
            'password' => $request->password ? Hash::make($request->password) : $admin->password,
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
