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
        // $products = Product::orderBy('id')->get(); // 100 productos por página
        // return view('admin.productos.index', compact('products'));

        // $query = Product::query();
        
        // Búsqueda por nombre o código
        // if ($request->filled('search')) {
        //     $search = $request->search;
        //     $query->where(function($q) use ($search) {
        //         $q->where('name', 'like', "%{$search}%")
        //           ->orWhere('sku', 'like', "%{$search}%");
        //     });
        // }

        // Filtro por marca
        // if ($request->filled('manufacturer_id')) {
        //     $query->where('manufacturer_id', $request->manufacturer_id);
        // }

        // $products = $query->paginate(100);
        // $manufacturers = Manufacturer::orderBy('descripcion')->get();
        // // dd($manufacturers);
        // return view('admin.productos.index', compact('products', 'manufacturers'));
        $query = Product::query();

        // Búsqueda por nombre o código
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('sku', 'like', "%{$search}%");
            });
        }

        // Filtro por marca
        if ($request->filled('manufacturer_id')) {
            $query->where('manufacturer_id', $request->manufacturer_id);
        }

        // Filtro por rango de precios
        if ($request->filled('price_min')) {
            $query->where('price', '>=', $request->price_min);
        }
        if ($request->filled('price_max')) {
            $query->where('price', '<=', $request->price_max);
        }

        // Ordenamiento
        if ($request->filled('sort')) {
            switch ($request->sort) {
                case 'price_asc':
                    $query->orderBy('price', 'asc');
                    break;
                case 'price_desc':
                    $query->orderBy('price', 'desc');
                    break;
                case 'name_asc':
                    $query->orderBy('name', 'asc');
                    break;
                case 'name_desc':
                    $query->orderBy('name', 'desc');
                    break;
                case 'date_desc':
                    $query->orderBy('updated_at', 'desc');
                    break;
                case 'date_asc':
                    $query->orderBy('updated_at', 'asc');
                    break;
            }
        }

        $products = $query->paginate(100);
        $manufacturers = Manufacturer::orderBy('descripcion')->get();

        return view('admin.productos.index', compact('products', 'manufacturers'));

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
