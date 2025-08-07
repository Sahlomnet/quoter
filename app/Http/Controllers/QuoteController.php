<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Quote;
use App\Models\Client;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quotes = Quote::with(['client', 'user'])->latest()->get();
        return view('admin.cotizaciones.index', compact('quotes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Client::orderBy('razon_social')->get();
        return view('admin.cotizaciones.create', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'client_id' => 'required|exists:clients,id',
            'fecha' => 'required|date',
            'observaciones' => 'nullable|string',
        ]);

        $folio = 'COT-' . str_pad(Quote::max('id') + 1, 4, '0', STR_PAD_LEFT); // Ej: COT-0001

        $quote = Quote::create([
            'user_id' => auth()->id(),
            'client_id' => $request->client_id,
            'folio' => $folio,
            'fecha' => $request->fecha,
            'observaciones' => $request->observaciones,
        ]);

    return redirect()->route('cotizaciones.show', $quote)->with('success', 'Cotización creada correctamente.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Quote $cotizaciones)
    {
        $quote = $cotizaciones->load('client', 'user');
        return view('admin.cotizaciones.show', compact('quote'));
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
