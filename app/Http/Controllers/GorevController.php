<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class GorevController extends Controller
{
    function olustur()
    {
        return view('GorevFormu');
    }
    function Gonder(Request $request)
    {
        $todo = new Todo();
        $todo->gorevad = $request->gorevad;
        $todo->gorevaciklama = $request->gorevaciklama;
        $todo->save();
    }
    function kontrol()
    {
        $todos = Todo::all();
        return view('kontroll', compact('todos'));
    }
    function duzenle($id)
    {
        $todor = Todo::find($id);
        if (!$todor) {
            return redirect()->back()->with('error', 'Düzenlenecek görev bulunamadı.');
        }
        return view('duzenle', compact('todor'));
    }
}
