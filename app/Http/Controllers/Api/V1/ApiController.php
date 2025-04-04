<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Aplicacion;
use Illuminate\Foundation\Inspiring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quotes = Http::get('https://zenquotes.io/api/quotes');
        $quote = $quotes->json();

        $indexQuote = rand(0, 20);

        return response()->json([
            'mzc_app_status' => true,
            'mzc_app_modules' => [
                'mzm_registros' => false,
                'mzm_trabajos' => false,
            ],
            'mz_message' => $quote[$indexQuote]['q'],
        ], 200);
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
