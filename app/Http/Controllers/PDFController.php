<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Principal;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function usuarisPDF()
    {
        if (auth()->user()->role != 'gestor') {
            auth()->logout();
            return redirect()->route('login');
        }
        $dades_usuaris = User::all();
        $pdf = Pdf::loadView('pdfs.usuaris', compact('dades_usuaris'));
        return $pdf->download('usuaris.pdf');
    }

    public function cursPDF($index)
    {
        $dades_curs = Principal::findOrFail($index);
        $pdf = Pdf::loadView('pdfs.curs', compact('dades_curs'));
        return $pdf->download('curs-'.$index.'.pdf');
    }
}
