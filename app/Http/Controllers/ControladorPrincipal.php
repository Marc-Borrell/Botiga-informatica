<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Principal;

class ControladorPrincipal extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dades_cursos = Principal::all();
        //return view('llista', compact('dades_cursos'));
        return view('llistaB', compact('dades_cursos'));
        // Recollirà totes les entrades de la taula treballadors i les desarà dins d'una
        //variable de nom $dades_treballadors
        //Cridara a la vista llista.blade.php que es trobarà a resouces/views per mostrar
        //les dades dels treballadors
        //The compact() function creates an array from variables and their values.
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crea');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nouCurs = $request->validate([
                'nomCurs' => 'required',
                'tema' => 'required',
                'descripcio' => 'required',
                'durada_hores' => 'required',
                'nivell' => 'required',
                'preu' => 'required',
                'data_inici' => 'required',
                'actiu' => 'required',
                'modalitat' => 'required',
                'places_maximes' => 'required',
                ]);
        $curs = Principal::create($nouCurs);
        return view('dashboard');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $index)
    {
        $dades_curs = Principal::findOrFail($index);
        return view('mostra',compact('dades_curs'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $index)
    {
        $dades_cursos = Principal::findOrFail($index);
        return view('actualitza',compact('dades_cursos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $index)
    {
        $noves_dades_curs = $request->validate([
        'nomCurs' => 'required',
        'tema' => 'required',
        'descripcio' => 'required',
        'durada_hores' => 'required',
        'nivell' => 'required',
        'preu' => 'required',
        'data_inici' => 'required',
        'actiu' => 'required',
        'modalitat' => 'required',
        'places_maximes' => 'required',
        ]);
        Principal::findOrFail($index)->update($noves_dades_curs);
        return view('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $index)
    {
        $treballador = Principal::findOrFail($index)->delete();
        return view('dashboard');
    }

    public function index_basic()
    {
    $dades_curs = Principal::all();
    return view('llista-basica', compact('dades_curs'));
    }

    public function show_basic($index)
    {
    $dades_cursos = Principal::findOrFail($index);
    return view('mostra-basica', compact('dades_cursos'));
    }
}
