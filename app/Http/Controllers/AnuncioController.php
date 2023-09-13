<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anuncio;
use Illuminate\Supportz\Facades\storage;

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
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'service_type' => 'required|string',
            'device_used' => 'required|string',
            'images' => 'required|array|min:1',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Configuração para upload de imagens
        ]);
    
        // Processar o upload das imagens
        $imagePaths = [];
        foreach ($data['images'] as $image) {
            $path = $image->store('uploads', 'public'); // Armazenar na pasta "uploads" dentro da pasta "public"
            $imagePaths[] = $path;
        }
    
        // Serializar os caminhos das imagens para uma string
        $imagePathsString = json_encode($imagePaths);
    
        // Salvar os dados no banco de dados
        $anuncio = Anuncio::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'service_type' => $data['service_type'],
            'device_used' => $data['device_used'],
            'images' => $imagePathsString, // Salvar a string serializada
        ]);
    
        return redirect()->route('anuncios.index')->with('success', 'Anúncio criado com sucesso.');
    }
    
}
