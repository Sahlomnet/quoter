<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Manufacturer;
// use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $marcas = Manufacturer::orderBy('descripcion')->get();
        $productos = Product::with(['manufacturer','group','subgroup'])->paginate(12);

        return view('admin.productos.index', compact('marcas', 'productos'));

    }

        // GET /admin/productos/get-grupos/{marca}
    public function getGruposPorMarca($marcaId)
    {
        $groupIds = Product::where('manufacturer_id', $marcaId)
            ->whereNotNull('group_id')
            ->distinct()
            ->pluck('group_id');

        $grupos = Group::whereIn('id', $groupIds)
            ->orderBy('descripcion')
            ->get(['id','descripcion']);

            dd($grupos);
        return response()->json($grupos);
    }

    // GET /admin/productos/get-subgrupos/{grupo}
    public function getSubgruposPorGrupo($grupoId)
    {
        $subgrupos = Subgroup::where('group_id', $grupoId)
            ->orderBy('descripcion')
            ->get(['id','descripcion']);

        return response()->json($subgrupos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
