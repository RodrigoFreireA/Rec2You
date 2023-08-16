<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anuncio;

class AnuncioController extends Controller
{
    public function index()
    {
        $anuncios = Anuncio::all(); // Obtém todos os anúncios do banco de dados
        return view('anuncios.index', compact('anuncios'));
    }

    public function show($id)
    {
        $anuncio = Anuncio::findOrFail($id);
        return view('anuncios.show', compact('anuncio'));
    }

    /**
     * Summary of create
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('anuncios.create');
    }
    

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'description' =>'required',
        ]);

            Anuncio::create($data);

            return redirect()->route('anuncios.index');
    }
}
