<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Mostrar una lista de todos los usuarios.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = User::query();

        // Filtrado
        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        if ($request->has('email')) {
            $query->where('email', 'like', '%' . $request->input('email') . '%');
        }

        // Paginación
        $users = $query->paginate(10); // Paginación de 10 usuarios por página

        return view('user.showAll', compact('users'));
    }

    /**
     * Mostrar el formulario para crear un nuevo usuario.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Almacenar un nuevo usuario en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'phone' => $request->phone,
        ]);

        return redirect()->route('users.showAll')->with('success', 'User created successfully');    }

    /**
     * Mostrar los detalles de un usuario específico.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('users.showAll')
                             ->with('error', 'User not found');
        }

        return view('user.show', compact('user'));
    }

    /**
     * Mostrar el formulario para editar un usuario existente.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('users.showAll')
                             ->with('error', 'User not found');
        }

        return view('user.edit', compact('user'));    }

    /**
     * Actualizar un usuario existente en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'sometimes|required|string|min:8|confirmed',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
        ]);

        if ($validator->fails()) {
            return redirect()->route('users.edit', $id)
                             ->withErrors($validator)
                             ->withInput();
                             }

             $user = User::find($id);

        if (!$user) {
            return redirect()->route('users.showAll')
                             ->with('error', 'User not found');

        }

        $user->update([
            'name' => $request->name ?? $user->name,
            'email' => $request->email ?? $user->email,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
            'address' => $request->address ?? $user->address,
            'phone' => $request->phone ?? $user->phone,
        ]);

        return redirect()->route('users.show', $id)->with('success', 'User updated successfully');    }

    /**
     * Eliminar un usuario específico de la base de datos.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('users.showAll')
                             ->with('error', 'User not found');
        }

        $user->delete();

        return redirect()->route('users.showAll')->with('success', 'User deleted successfully');
    }
}

