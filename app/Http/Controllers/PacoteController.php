<?php

namespace App\Http\Controllers;

use App\Models\Pacote;
use Illuminate\Http\Request;

class PacoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Pacote $pacote)
    {
        $pacotes = $pacote->all();
        return view('pacotes.index', compact('pacotes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pacotes.criar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Pacote $pacote)
    {
        $pk = $pacote->create([
            "titulo"=>$request->titulo,
            "foto1"=>$request->foto1,
            "foto2"=>$request->foto2,
            "foto3"=>$request->foto3,
            "preco"=>$request->preco,
            "comidas"=>$request->comidas,
            "bebidas"=>$request->bebidas,
        ]);

        return redirect()->route('pacotes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, Pacote $pacote)
    {
        $pacote = $pacote->find($id);

        if(!$pacote) {
            return back();
        }
        
        return view('pacotes.show', compact('pacote'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, Pacote $pacote)
    {
        $pacote = $pacote->find($id); 

        if(!$pacote) {
            return back();
        }
        
        return view('pacotes.edit', compact('pacote'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        //$pacote = $this->pacote->where('id',$id)->update()

        var_dump(value:$request->all());

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id): bool|null
    {
        if (!$this->findOneById($id)) {
            return null;
        }
        return $this->recommendation->destroy($id);
    }
}
