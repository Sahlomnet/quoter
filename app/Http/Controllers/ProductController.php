<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Manufacturer;
use App\Models\Group;
use App\Models\Subgroup;
use App\Models\Client;
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
        try {
            // Verifica si existen productos para esa marca
            $groupIds = Product::where('manufacturer_id', $marcaId)
                ->whereNotNull('group_id')
                ->distinct()
                ->pluck('group_id');
            if ($groupIds->isEmpty()) {
                return response()->json([]);
            }
            $grupos = Group::whereIn('id', $groupIds)
                ->orderBy('descripcion')
                ->get(['id', 'descripcion']);
            return response()->json($grupos);
        } catch (\Exception $e) {
            \Log::error("Error en getGruposPorMarca: " . $e->getMessage());
            return response()->json(['error' => 'Error interno'], 500);
        }
    }

    // GET /admin/productos/get-subgrupos/{grupo}
    public function getSubgruposPorGrupo($grupoId)
    {
        try{
            $subgrupos = Subgroup::where('group_id', $grupoId)
                ->orderBy('descripcion')
                ->get(['id','descripcion']);
            if($subgrupos->isEmpty()) {
                return response()->json([]);
            }
            return response()->json($subgrupos);
        } catch (\Exception $e) {
            \Log::error("Error en getSubgruposPorGrupo: " . $e->getMessage());
            return response()->json(['error' => 'Error interno'], 500);
        }

    }

    public function getProductos(Request $request)
    {
        try {
            $query = Product::query();

            if ($request->manufacturer_id) {
                $query->where('manufacturer_id', $request->manufacturer_id);
            }
            if ($request->group_id) {
                $query->where('group_id', $request->group_id);
            }
            if ($request->subgroup_id) {
                $query->where('subgroup_id', $request->subgroup_id);
            }

            $products = $query->with('manufacturer','group','subgroup')->limit(38)->orderBy('precio')->get();

            $html = view('admin.productos.partials.cards', compact('products'))->render();

            return response()->json(['html' => $html]);
        } catch (\Exception $e) {
            \Log::error("Error en getProductos: " . $e->getMessage());
            return response()->json(['html' => '<div class="alert alert-danger">Error al cargar productos.</div>']);
        }
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
