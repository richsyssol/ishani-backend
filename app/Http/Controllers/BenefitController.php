<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BenefitController extends Controller
{
    /**
     * Display a listing of benefits.
     */
    public function index(Request $request)
    {
        $query = Benefit::query()->ordered();
        
        if ($request->has('category_id')) {
            $query->where('category_id', $request->category_id);
        } else {
            $query->whereNull('category_id');
        }

        $benefits = $query->get(['title', 'description', 'icon']);

        return response()->json([
            'success' => true,
            'data' => $benefits,
            'message' => 'Benefits retrieved successfully'
        ]);
    }

    /**
     * Display the specified benefit.
     */
    public function show($id)
    {
        $benefit = Benefit::findOrFail($id, ['title', 'description', 'icon']);

        return response()->json([
            'success' => true,
            'data' => $benefit,
            'message' => 'Benefit retrieved successfully'
        ]);
    }
}
