<?php

namespace App\Http\Controllers;

use App\Models\manga;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index(Request $request)
    {
    $search = $request->input('search');

    if ($search) {
        $datos = manga::where('nombre_manga', 'LIKE', '%' . $search . '%')
                    ->orderBy('nombre_manga', 'asc')
                    ->get();
    } else {
        $datos = manga::orderBy('nombre_manga', 'asc')->get();
    }

    $ultimosMangas = manga::orderBy('created_at', 'desc')->take(4)->get();

    return view('inicio', compact('datos', 'ultimosMangas', 'search'));
    }
/************************************************************************************************/ 
    public function create()
    {
        return view('addManga');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_manga' => 'required|string|max:75', 
            'tomo' => 'required|string|max:25', 
            'precio' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $manga = new Manga();
        $manga->nombre_manga = $request->nombre_manga;
        $manga->tomo = $request->tomo;
        $manga->precio = $request->precio;
    
        // la imageeeen
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('manga', 'public');
            $manga->image = basename($imagePath);
        }
    
        $manga->save();
    
        return redirect()->route('manga.show')->with('success', 'Manga registrado con éxito');

    }
/************************************************************************************************/ 
    public function show(Request $request)
    {
    $search = $request->input('search');

    if ($search) {
        $datos = manga::where('nombre_manga', 'LIKE', '%' . $search . '%')
                    ->orderBy('nombre_manga', 'asc')
                    ->get();
    } else {
        $datos = manga::orderBy('nombre_manga', 'asc')->get();
    }
    return view('listManga', compact('datos', 'search'));
    }

/************************************************************************************************/ 
    public function edit(manga $manga)
    {
        $modalManga = manga::orderBy('created_at', 'desc')->take(1)->get();

    return view('updManga', compact('modalManga'));
    }
/************************************************************************************************/ 
    public function update(Request $request, manga $manga)
    {
        //
    }
/************************************************************************************************/ 
    public function destroy(manga $manga)
    {
        return view('eliManga');
    }
}
