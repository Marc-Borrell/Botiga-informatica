<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ControladorUsuaris extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->user()->role != 'gestor') {
            auth()->logout();
            return redirect()->route('login');
        }
        $dades_usuaris = User::all();
        return view('usuaris.llista', compact('dades_usuaris'));
        /*if (Auth()->user()->role == "gestor"){
        return view('llista2', compact('dades_usuaris')); 
        } else{
        return view('llista-basica', compact('dades_usuaris'));
        } */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (auth()->user()->role != 'gestor') {
            auth()->logout();
            return redirect()->route('login');
        }
        return view('usuaris.crea');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (auth()->user()->role != 'gestor') {
            auth()->logout();
            return redirect()->route('login');
        }
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'role'     => 'required|in:gestor,consultor',
        ]);
        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => $request->role,
        ]);
        return redirect()->route('usuaris.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (auth()->user()->role != 'gestor') {
            auth()->logout();
            return redirect()->route('login');
        }
        $usuari = User::findOrFail($id);
        return view('usuaris.mostra', compact('usuari'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if (auth()->user()->role != 'gestor') {
            auth()->logout();
            return redirect()->route('login');
        }
        $usuari = User::findOrFail($id);
        return view('usuaris.actualitza', compact('usuari'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (auth()->user()->role != 'gestor') {
            auth()->logout();
            return redirect()->route('login');
        }
          $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'role'  => 'required|in:gestor,consultor',
        ]);
        $usuari = User::findOrFail($id);
        $usuari->update([
            'name'  => $request->name,
            'email' => $request->email,
            'role'  => $request->role,
        ]);
        return redirect()->route('usuaris.index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (auth()->user()->role != 'gestor') {
            auth()->logout();
            return redirect()->route('login');
        }
        User::findOrFail($id)->delete();
        return redirect()->route('usuaris.index');
    }
}
